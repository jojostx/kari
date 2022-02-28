<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\Payment;
use App\Models\User;
use Filament\Tables\Actions\LinkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
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
            TextColumn::make('status')
                ->formatStateUsing(fn ($state, Payment $record): View => view('components.partials.payment-status', compact('state', 'record')))
                ->extraAttributes(['style' => 'max-width: 150px; overflow-wrap: break-word; white-space: normal; font-size: 0.8rem; ']),

            TextColumn::make('plan.name')
                ->label('Type')
                ->extraAttributes(['style' => 'text-transform: uppercase; font-size: 0.8rem; font-weight: 600;']),

            TextColumn::make('plan.principal')
                ->extraAttributes(['style' => 'font-size: 0.8rem; font-weight: 600;'])
                ->label('Principal')->money('gbp', true),

            TextColumn::make('tag')
                ->label('Tag')
                ->extraAttributes(['style' => 'max-width: 150px; overflow-wrap: break-word; white-space: normal; font-size: 0.8rem; ']),
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

    public function getPendingPaymentsCountProperty()
    {
        return User::find(Auth::id())?->payments()->pending()->exists();
    }

    public function render()
    {
        return view(
            'livewire.customer.app.investments'
        );
    }
}
