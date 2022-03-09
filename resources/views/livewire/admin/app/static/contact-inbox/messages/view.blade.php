<div class="flex-1 w-full px-4 mx-auto md:px-6 lg:px-8 max-w-7xl">
    <div x-data="{show_reply_form : false }" x-on:show-replies-table.window="show_reply_form = false">
        <div class="space-y-6">
            <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
                <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                    View <span class="text-gray-500">{{ $message->fullname }}'s</span> Message
                </h1>

                <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                    <x-button x-show="!show_reply_form" type="button" x-on:click="show_reply_form = true" wire:loading.attr="disabled">
                        <span>Reply</span>
                    </x-button>
                </div>
            </header>
        </div>

        <div class="grid grid-cols-1 gap-6 mt-4 md:mt-0">
            <div class="grid grid-cols-1 gap-6 col-span-full sm:grid-cols-3">
                <div class="grid grid-cols-1 gap-6 p-6 bg-white border rounded-lg shadow-sm md:grid-cols-2 col-span-full sm:col-span-2">
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 ">Name</dt>
                        <dd class="text-sm font-medium leading-5">{{ $message->fullname }}</dd>
                    </dl>
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 ">Phone</dt>
                        <dd class="text-sm font-medium leading-5">{{ $message->phone ?: 'Not Specified' }}</dd>
                    </dl>
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 ">Email</dt>
                        <dd class="text-sm font-medium leading-5">{{ $message->email ?: 'Not Specified' }}</dd>
                    </dl>
                    <dl>
                        <dt class="text-sm font-medium leading-5 text-gray-500 ">Body</dt>
                        <dd class="text-sm font-medium leading-5">{{ $message->message }}</dd>
                    </dl>
                </div>

                <div class="col-span-1 ">
                    <div class="p-6 bg-white shadow rounded-xl">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1 ">
                                <div>
                                    <div class="space-y-1">

                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.created_at">
                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                Created at
                                            </span>
                                        </label>
                                        <div>
                                            {{ $message->created_at?->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 ">
                                <div>
                                    <div class="space-y-1">
                                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="data.updated_at">
                                            <span class="text-sm font-medium leading-4 text-gray-700">
                                                Last modified at
                                            </span>
                                        </label>
                                        <div>
                                            {{ $message->updated_at?->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="!show_reply_form" x-cloak class="col-span-full">
                    <p class="font-bold tracking-wide sm:text-lg">
                        Replies 
                    </p>
                    <div class="mt-2">
                        {{ $this->table }}
                    </div>
                </div>
            </div>

            <div x-show="show_reply_form" x-cloak class="grid grid-cols-1 gap-6 mt-6">
                <div class="grid grid-cols-1 gap-6 col-span-full sm:grid-cols-3">
                    <div class="p-6 bg-white border rounded-lg shadow-sm col-span-full sm:col-span-2">
                        {{ $this->form }}

                        <div class="flex items-center mt-4">
                            <x-button type="button" wire:click="reply" wire:target="reply" wire:loading.attr="disabled">
                                <span>Reply</span>
                            </x-button>
                            <button x-on:click="show_reply_form = false" type="button" class="inline-flex items-center justify-center px-4 py-1 ml-2 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                                <span>Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        
    @if (session()->has('message'))
    <x-alert-toast>
        {{ session('message') }}
    </x-alert-toast>
    @endif
</div>