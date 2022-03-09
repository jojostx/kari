<?php

namespace App\Http\Livewire\Admin\App\Investment\Customers;

use App\Models\Subscription;
use App\Models\User;
use Closure;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
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
        return User::customers();
    }

    protected function getTableBulkActions(): array
    {
        // send email notification to verify their email & activate account.
        return [
            BulkAction::make('notify')->action(fn (Collection $records) => $records->each(function (User $user)
            {
                if (!$user->hasVerifiedEmail()) {    
                    $user->sendEmailVerificationNotification();
                }
            }))->deselectRecordsAfterCompletion(),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('View')
            ->label('')
            ->extraAttributes(['style' => 'max-width: 50px;'])
            ->default('View')
            ->url(fn ($record): string => route('admin.investment.customers.view', ['customer' => $record])),
            
            TextColumn::make('full_name')
            ->extraAttributes(['style' => 'max-width: 150px; overflow-wrap: break-word; white-space: normal;'])
            ->label('Name')
            ->searchable(['first_name', 'last_name']),

            TextColumn::make('email')
            ->extraAttributes(['style' => 'max-width: 150px; overflow-wrap: break-word; white-space: normal;'])
            ->searchable(),

            BooleanColumn::make('Verified')
            ->label('Email verified')
            ->sortable(['email_verified_at']),

            TextColumn::make('phone_number')
            ->label('Phone')
            ->searchable(),

            BooleanColumn::make('verified_phone')
            ->label('Phone verified')
            ->sortable(['phone_verified_at']),

            TextColumn::make('created_at')
            ->label('Registered')
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
        return view('livewire.admin.app.investment.customers.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
