<?php

namespace App\Http\Livewire\Admin\App\Investment\Plans;

use App\Models\Plan;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Edit extends Component implements HasForms
{
    use InteractsWithForms;

    public Plan $plan;

    protected function getFormModel()
    {
        return $this->plan;
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')->label('Type')->required(),
            TextInput::make('principal')->label('Principal')->required(),
            TextInput::make('interest')->label('Interest')->required(),
            TextInput::make('bonus')->label('Bonus')->required()->integer(),
            // MarkdownEditor::make('icon')->label('Icon SVG')
            //     ->toolbarButtons([
            //         'bold',
            //         'bulletList',
            //         'orderedList',
            //         'italic',
            //         'link',
            //         'edit',
            //         'preview',
            //     ]),
        ];
    }

    public function save(): void
    {}

    public function render()
    {
        return view('livewire.admin.app.investment.plans.edit')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
