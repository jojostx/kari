<?php

namespace App\Http\Livewire\Admin\App\Static\Faqs;

use App\Models\Faq;
use App\Models\FaqCategory;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Edit extends Component implements HasForms
{
    use InteractsWithForms;

    public Faq $faq;

    public function mount(Faq $faq): void
    {
        $this->faq = $faq;

        $this->form->fill([
            'question' => $this->faq->question,
            'answer' => $this->faq->answer,
            'faq_category_id' => $this->faq->faq_category_id
        ]);
    }

    protected function getFormModel(): string
    {
        return $this->faq;
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('category_id')
                ->label('category')
                ->options(FaqCategory::pluck('name', 'id')->toArray())
                ->rules(['exists:faq_categories,id']),

            TextInput::make('question')->required(),

            MarkdownEditor::make('answer')
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

    public function update()
    {
        $updated = $this->faq->update($this->form->getState());

        if ($updated) {
            session()->flash('message', 'FAQ edited successfully');
    
            return redirect()->route('admin.static.faqs.index');
        }
        
        $this->addError('failed_update', 'unable to update faq, try again');
    }

    public function render()
    {
        return view('livewire.admin.app.static.faqs.edit')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
