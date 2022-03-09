<?php

namespace App\Http\Livewire\Admin\App\Static\ContactInbox\Messages;

use App\Models\ContactMessage;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
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
        return ContactMessage::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('View')
                ->label('')
                ->extraAttributes(['style' => 'max-width: 50px;'])
                ->default('View')
                ->url(fn ($record): string => route('admin.static.contact-inbox.messages.view', ['message' => $record])),

            TextColumn::make('fullname')
                ->label('Name')
                ->extraAttributes(['style' => 'padding:0.75rem 0rem 0.75rem 0.75rem; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('phone')
                ->label('Phone')
                ->extraAttributes(['style' => 'padding:0.75rem 0rem 0.75rem 0.75rem; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('email')
                ->label('Email')
                ->extraAttributes(['style' => 'max-width:180px; overflow-wrap: break-word; white-space: normal;'])
                ->searchable(),

            TextColumn::make('message')
                ->label('Message')
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

    protected function paginateTableQuery(Builder $query): Paginator
    {
        return $query->simplePaginate($this->getTableRecordsPerPage());
    }

    public function render()
    {
        return view('livewire.admin.app.static.contact-inbox.messages.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
