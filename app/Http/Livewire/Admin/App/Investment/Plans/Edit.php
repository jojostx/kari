<?php

namespace App\Http\Livewire\Admin\App\Investment\Plans;

use App\Models\Plan;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Edit extends Component implements HasForms
{
    use InteractsWithForms;

    public Plan $plan;

    public function mount(): void
    {
        $this->form->fill([
            'name' => $this->plan->name,
            'principal' => $this->plan->principal,
            'interest' => $this->formatPercentage($this->plan->interest),
            'bonus' => $this->formatPercentage($this->plan->bonus),
            'icon' => $this->plan->icon,
        ]);
    }

    protected function getFormModel()
    {
        return $this->plan;
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->label('Type')->required(),
            
            TextInput::make('principal')->label('Principal')->required()->dehydrateStateUsing(fn ($state) => intval($state))->view('livewire.filament.forms.components.money-input'),
            
            TextInput::make('interest')->label('Interest')->required()->dehydrateStateUsing(fn ($state) => floatval($state) / 100)->view('livewire.filament.forms.components.percentage-input'),
            
            TextInput::make('bonus')->label('Bonus')->required()->dehydrateStateUsing(fn ($state) => floatval($state) / 100)->view('livewire.filament.forms.components.percentage-input'),
            
            MarkdownEditor::make('icon')->required()->toolbarButtons([
                'link',
                'edit',
                'preview',
            ])->hint('paste the SVG code for the icon here'),
        ];
    }

    public function formatPercentage($value)
    {
        return round(floatval($value) * 100, 0);
    }

    public function save()
    {
        $this->plan->update($this->form->getState());

        session()->flash('message', 'Plan successfully updated.');

        return redirect()->route('admin.investment.plans.index');
    }

    public function render()
    {
        return view('livewire.admin.app.investment.plans.edit')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
