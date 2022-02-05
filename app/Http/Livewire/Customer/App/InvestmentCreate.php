<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\Payment;
use App\Models\Plan;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class InvestmentCreate extends Component implements HasForms
{
    use InteractsWithForms;

    public $payment;

    public function mount(): void
    {
        $this->form->fill([
            'type' => '',
            'title' => '',
        ]);
    }

    protected function getFormModel()
    {
        return $this->payment;
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('plan_id')
                ->label('Plan Type')
                ->options(Plan::all()->pluck('name', 'id'))
                ->required(),

            TextInput::make('tag')
            ->label('Title')
            ->helperText('The title will be used to uniquely identify the investment')
            ->required()->rules(['between:12,32'])->unique(table: Payment::class, column: 'tag'),
        ];
    }

    public function create()
    {        
        if (auth()->user()->payments()->count() <= 5) {
            $payment_pending = auth()->user()->payments()->create([
                'tag' => $this->form->getState()['tag'],
                'plan_id' => $this->form->getState()['plan_id'],
            ]);

            return redirect()->route('investments.approve', ['payment' => $payment_pending->refresh()]);
        }
        else {
            return redirect()->route('investments.index');
        }
    }

    public function render()
    {
        return view('livewire.customer.app.investment-create');
    }
}
