<?php

namespace App\Http\Livewire\Admin\App\Static\NewsFeeds\Feeds;

use App\Models\Newsfeed;
use Closure;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
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
        return Newsfeed::query();
    }

    protected function getTableBulkActions(): array
    {
        return [
            BulkAction::make('delete')->action(fn (Collection $records) => $records->each->delete())->deselectRecordsAfterCompletion(),
        ];
    }

    protected function getTableRecordUrlUsing(): Closure
    {
        return fn (Model $feed): string => route('admin.static.newsfeeds.feeds.edit', ['feed' => $feed]);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('tag')->label('Tag')->searchable()->extraAttributes(['class' => 'bg-gray-50']),
            TextColumn::make('content')->limit('25'),
            TextColumn::make('author_email')->limit('25')->searchable(),
            TextColumn::make('created_at')->label('published at')->date('M j, Y'),
        ];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    public function render()
    {
        return view('livewire.admin.app.static.news-feeds.feeds.index')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
