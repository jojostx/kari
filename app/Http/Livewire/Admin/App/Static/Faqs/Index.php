<?php

namespace App\Http\Livewire\Admin\App\Static\Faqs;

use App\Models\Faq as FaqModel;
use Closure;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\LinkAction;
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
        return FaqModel::query();
    }

    protected function getTableBulkActions(): array
    {
        return [
            BulkAction::make('delete')->action(fn (Collection $records) => $records->each->delete())->deselectRecordsAfterCompletion(),
        ];
    }

    protected function getTableRecordUrlUsing(): Closure
    {
        return fn (Model $faq): string => route('admin.static.faqs.edit', ['faq' => $faq]);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('category.name')->label('Category')->searchable()->extraAttributes(['class' => 'bg-gray-50']),
            TextColumn::make('question')->limit('35')->searchable(),
            TextColumn::make('answer')->limit('25'),
            TextColumn::make('created_at')->label('published at')->date('M j, Y'),
        ];
    }

    public function isTableSearchable(): bool
    {
        return true;
    }

    public function render()
    {
        return view('livewire.admin.app.static.faqs.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
