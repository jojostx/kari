<?php

namespace App\Http\Livewire\Admin\App\Investment\Subscriptions;

use App\Models\Subscription;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component implements HasTable
{
    use InteractsWithTable;

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
    ];

    protected function getTableQuery(): Builder
    {
        return Subscription::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('View')
                ->label('')
                ->extraAttributes(['style' => 'max-width: 50px;'])
                ->default('View')
                ->url(fn ($record): string => route('admin.investment.subscriptions.view', ['subscription' => $record])),

            TextColumn::make('refcode')
                ->label('Refcode (teller-code)')
                ->extraAttributes(['style' => 'padding:0.75rem 0rem 0.75rem 0.25rem; max-width:160px; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('customer.email')
                ->label('Customer Email')
                ->extraAttributes(['style' => 'max-width:140px; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('plan.name')
                ->formatStateUsing(fn ($state) => strtoupper($state))
                ->label('Plan')
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Start date')
                ->date('M j, Y')
                ->sortable()
                ->extraAttributes(['style' => 'max-width: 80px;']),

            TextColumn::make('ends_at')
                ->label('End date')
                ->date('M j, Y')
                ->sortable()
                ->extraAttributes(['style' => 'max-width: 80px;']),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            Filter::make('Ongoing')
                ->query(fn (Builder $query): Builder => $query->ongoing()),

            Filter::make('Expired')
                ->query(fn (Builder $query): Builder => $query->matured()),
        ];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    protected function paginateTableQuery(Builder $query): Paginator
    {
        return $query->simplePaginate($this->getTableRecordsPerPage());
    }

    public function render()
    {
        return view('livewire.admin.app.investment.subscriptions.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
