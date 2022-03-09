<?php

namespace App\Http\Livewire\Admin\App\Static\ContactInbox\Messages;

use App\Models\ContactMessage;
use App\Models\Reply;
use App\Notifications\Admin\ContactMessageReplyNotification;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class View extends Component implements HasTable
{
    use InteractsWithTable;

    public ContactMessage $message;

    public $subject;
    public $body;

    protected $queryString = [
        'tableFilters',
        'tableSortColumn',
        'tableSortDirection',
        'tableSearchQuery' => ['except' => ''],
    ];

    protected function getListeners()
    {
        return ['refreshSelf' => '$refresh'];
    }

    protected function getTableQuery(): Builder
    {
        return $this->message->replies()->getQuery();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('subject')
                ->label('Subject')
                ->searchable(),

            TextColumn::make('body')
                ->label('Body'),

            TextColumn::make('created_at')
                ->label('Created at')
                ->date('M j, Y')
                ->sortable()
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

    protected function getFormModel(): string
    {
        return Reply::class;
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make()->columns(1)
                ->schema([
                    TextInput::make('subject')->required(),

                    MarkdownEditor::make('body')
                        ->toolbarButtons([
                            'link',
                            'bold',
                            'bulletList',
                            'h3',
                            'italic',
                        ])->rules(['max:512', 'string'])->required(),
                ])
        ];
    }

    public function reply()
    {
        $reply = Reply::create(array_merge(['contact_message_id' => $this->message->getKey()], $this->form->getState()));

        if ($reply) {
            $this->message->notify(new ContactMessageReplyNotification($reply));

            session()->flash('message', 'Reply sent successfully');
            
            $this->reset(['subject', 'body']);

            $this->emitSelf('refreshSelf');
            
            $this->dispatchBrowserEvent('show-replies-table', true);

            return;
        }

        session()->flash('message', 'An error occurred while sending your reply, Try again later');
    }

    public function render()
    {
        return view('livewire.admin.app.static.contact-inbox.messages.view')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
