<?php

namespace App\Http\Livewire\Admin\App\Static\Faqs;

use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Create extends Component implements HasForms
{
    use InteractsWithForms;

    public $question;
    public $answer;

    public function mount(): void
    {
        $this->form->fill();
    }

    protected function getFormModel(): string
    {
        return Faq::class;
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\BelongsToSelect::make('category_id')->label('category')->relationship('category', 'name'),
            
            Forms\Components\TextInput::make('question')->required(),
            
            Forms\Components\MarkdownEditor::make('answer')
                ->toolbarButtons([
                    'bold',
                    'bulletList',
                    'orderedList',
                    'italic',
                    'link',                    
                    'edit',
                    'preview',
                ]),
        ];
    }

    public function create()
    {     
        $faq = Faq::create($this->form->getState());
 
        session()->flash('message', 'FAQ created successfully');

        return redirect()->route('admin.static.faqs.index');
    }

    public function render()
    {
        return view('livewire.admin.app.static.faqs.create')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
