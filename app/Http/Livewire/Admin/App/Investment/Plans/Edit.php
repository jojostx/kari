<?php

namespace App\Http\Livewire\Admin\App\Investment\Plans;

use App\Models\Plan;
use Filament\Forms\Components\Grid;
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
            'description' => $this->plan->description,
        ]);
    }

    protected function getFormModel()
    {
        return $this->plan;
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make(['default' => 1, 'md' => 2])
                ->schema([
                    TextInput::make('name')->label('Type')->required(),

                    TextInput::make('principal')->label('Principal')->required()->rules(['numeric'])->dehydrateStateUsing(fn ($state) => intval($state))->view('livewire.filament.forms.components.money-input'),

                    TextInput::make('interest')->label('Interest')->required()->rules(['numeric'])->dehydrateStateUsing(fn ($state) => floatval($state) / 100)->view('livewire.filament.forms.components.percentage-input'),

                    TextInput::make('bonus')->label('Bonus')->required()->rules(['numeric'])->dehydrateStateUsing(fn ($state) => floatval($state) / 100)->view('livewire.filament.forms.components.percentage-input'),

                    RichEditor::make('description')->label('Description')->required()->toolbarButtons([
                        'link',
                        'bold',
                        'bulletList',
                        'h3',
                        'italic',
                        'strike',
                    ])->rules(['max:512', 'string'])->hint('Add a description for the plan'),

                    MarkdownEditor::make('icon')->required()->rules(['max:10542', 'string'])->toolbarButtons([
                        'link',
                        'edit',
                        'preview',
                    ])->hint('paste the SVG code for the icon here')->extraAttributes(['style' => 'overflow-y: scroll;']),
                ]),
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
