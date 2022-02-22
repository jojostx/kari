<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\Payment;
use App\Models\Plan;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class InvestmentCreate extends Component implements HasForms
{
    use InteractsWithForms, AuthorizesRequests;

    public $tag;
    
    public $plan_id;


    public function mount(): void
    {
        $this->authorize('create', Payment::class);
    }

    protected function getFormModel()
    {
        return Payment::class;
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('plan_id')
                ->label('Plan Type')
                ->options(Plan::all()->pluck('name', 'id'))
                ->required(),

            TextInput::make('tag')
                ->label('Title')->hint("examples: my child's uni investment")
                ->helperText('The title will be used to uniquely identify the investment subcription')
                ->required()->rules(['between:12,32'])->unique(table: Payment::class, column: 'tag'),
        ];
    }

    public function create()
    {
        try {
            $payment_pending = auth()->user()->payments()->create([
                'tag' => $this->form->getState()['tag'],
                'plan_id' => $this->form->getState()['plan_id'],
            ]);

            return redirect()->route('investments.approve', ['payment' => $payment_pending->refresh()]);
        } catch (\Throwable $th) {
            return redirect()->route('investments.index');
        }
    }

    public function render()
    {
        return view('livewire.customer.app.investment-create');
    }
}
