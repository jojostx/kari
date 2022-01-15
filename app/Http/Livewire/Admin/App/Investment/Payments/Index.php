<?php

namespace App\Http\Livewire\Admin\App\Investment\Payments;

use App\Models\Payment;
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
        return ['payment-approved' => '$refresh'];
    }

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
    ];

    protected function getTableQuery(): Builder
    {
        return Payment::query();
    }

    protected function getTableColumns(): array
    {
        return [
             TextColumn::make('status')
                ->formatStateUsing(fn (string $state): View => view('components.partials.subscription-status', compact('state')))
                ->action(function (Payment $record): void {
                    if (!$record->status) {
                        $this->dispatchBrowserEvent('open-payment-approval-modal');

                        $this->emit('open-payment-approval-modal', [$record->getKey()]);
                    }
                })->extraAttributes(['style' => 'cursor: text;']),

            TextColumn::make('refcode')
                ->label('Refcode (teller-code)')
                ->default('non-specified')
                ->extraAttributes(['style' => 'padding:0.75rem 0rem 0.75rem 0.75rem; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('customer.email')
                ->label('Customer Email')
                ->extraAttributes(['style' => 'max-width:180px; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('created_at')
                ->label('Created at')
                ->date('M j, Y')
                ->extraAttributes(['style' => 'max-width: 80px;']),
        ];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    protected function getTableFilters(): array
    {
        return [
            Filter::make('Approved')
                ->query(fn (Builder $query): Builder => $query->where('status', true)),

            Filter::make('Pending')
                ->query(fn (Builder $query): Builder => $query->where('status', false)),
        ];
    }

    protected function paginateTableQuery(Builder $query): Paginator
    {
        return $query->simplePaginate($this->getTableRecordsPerPage());
    }

    public function render()
    {
        return view('livewire.admin.app.investment.payments.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
