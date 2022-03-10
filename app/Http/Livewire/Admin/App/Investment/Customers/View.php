<?php

namespace App\Http\Livewire\Admin\App\Investment\Customers;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class View extends Component implements HasForms
{
    use InteractsWithForms;

    public User $customer;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone_number;
    
    public $updated = false;

    public function mount(): void
    {
        $this->form->fill([
            'first_name' => $this->customer->first_name,
            'middle_name' => $this->customer->middle_name,
            'last_name' => $this->customer->last_name,
            'email' => $this->customer->email,
            'phone_number' => $this->customer->phone_number,
        ]);
    }

    protected function getFormModel(): User
    {
        return $this->customer;
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('first_name')->required(),
                    TextInput::make('middle_name')->required(),
                    TextInput::make('last_name')->required(),
                    TextInput::make('email')->required(),
                    TextInput::make('phone_number')->required(),
                ])
        ];
    }

    public function save()
    {
        $this->updated =$this->customer->update($this->form->getState());
    }

    public function render()
    {
        return view('livewire.admin.app.investment.customers.view')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
