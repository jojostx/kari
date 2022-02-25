<?php

namespace App\Http\Livewire\Customer\App;

use Filament\Tables\Actions\LinkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Investments extends Component implements HasTable
{
    use InteractsWithTable;

    public $subscriptions;

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
    ];

    public function mount()
    {  
        $this->subscriptions = auth()->user()->subscriptions()->ongoing()->get();
    }

    protected function getTableQuery(): Builder
    {
        return Auth::user()->payments()->where('status', false)->getQuery();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('plan.name')
                ->label('Type')
                ->extraAttributes(['style' => 'text-transform: uppercase; font-size: 0.8rem; font-weight: 600;']),

            TextColumn::make('tag')
                ->label('Tag')
                ->extraAttributes(['style' => 'max-width: 150px; overflow-wrap: break-word; white-space: normal; font-size: 0.8rem; ']),

            TextColumn::make('plan.principal')
                ->extraAttributes(['style' => 'font-size: 0.8rem; font-weight: 600;'])
                ->label('Principal')->money('gbp', \true),

            TextColumn::make('status')
                ->formatStateUsing(function (string $state, $record): string {
                    if ($record->refcode && !$state) {
                        return 'Your payment is being reviewed for approval';
                    }

                    return 'Click the "approve" link to complete you payment for approval';
                })->extraAttributes(function ($record) {
                    if ($record->refcode) {
                        return ['class' => 'text-blue-600, text-sm', 'style' => 'color: rgb(37, 99, 235)'];
                    }

                    return ['class' => 'text-gray-600, text-xs'];
                })->wrap(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            LinkAction::make('Approve')
                ->url(fn ($record): string => route('investments.approve', ['payment' => $record]))
                ->hidden(fn ($record): bool => !$record->status && $record->refcode),
        ];
    }

    protected function paginateTableQuery(Builder $query): Paginator
    {
        return $query->simplePaginate($this->getTableRecordsPerPage());
    }

    public function getPendingPayoutCountProperty()
    {
        return Auth::user()->payments()->where('status', false)->exists();
    }

    public function render()
    {
        return view(
            'livewire.customer.app.investments'
        );
    }
}
