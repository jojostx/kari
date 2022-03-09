<?php

namespace App\Http\Livewire\Admin\App\Investment\Payouts;

use App\Models\Payout;
use App\Models\User;
use Filament\Tables\Actions\ButtonAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getListeners()
    {
        return ['payout-approved' => '$refresh'];
    }

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
    ];

    protected function getTableQuery(): Builder
    {
        return Payout::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('status')
                ->formatStateUsing(fn (string $state): View => view('components.partials.payout-status', compact('state')))
                ->extraAttributes(['style' => 'cursor: text; padding:0.75rem 0.4rem 0.75rem 0.4rem; overflow-wrap: break-word; white-space: normal;']),

            TextColumn::make('tag')
                ->label('Tag')
                ->extraAttributes(['style' => 'padding:0.75rem 0rem 0.75rem 0.75rem; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('amount')
                ->label('Amount')
                ->extraAttributes(['style' => 'max-width:140px; overflow-wrap: break-word; white-space: normal;'])
                ->money('gbp', true),

            TextColumn::make('customer.email')
                ->label('Customer Email')
                ->extraAttributes(['style' => 'max-width:180px; overflow-wrap: break-word; white-space: normal;']),

            TextColumn::make('created_at')
                ->label('Created at')
                ->date('M j, Y')
                ->extraAttributes(['style' => 'max-width: 80px;']),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            ButtonAction::make('Approve')
                ->action(function (Payout $record): void {
                    if ($record->status === Payout::REQUESTED) {
                        $this->dispatchBrowserEvent('open-payout-approval-modal');

                        $this->emit('open-payout-approval-modal', [$record->getKey()]);
                    }
                })
                ->hidden(fn ($record): bool => $record->status !== Payout::REQUESTED),
        ];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    protected function getTableFilters(): array
    {
        return [
            Filter::make('Created')
                ->query(fn (Builder $query): Builder => $query->where('status', Payout::CREATED)),

            Filter::make('Requested')
                ->query(fn (Builder $query): Builder => $query->where('status', Payout::REQUESTED)),

            Filter::make('Withdrawn')
                ->query(fn (Builder $query): Builder => $query->where('status', Payout::WITHDRAWN)),
        ];
    }

    protected function paginateTableQuery(Builder $query): Paginator
    {
        return $query->simplePaginate($this->getTableRecordsPerPage());
    }

    public function render()
    {
        return view('livewire.admin.app.investment.payouts.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
