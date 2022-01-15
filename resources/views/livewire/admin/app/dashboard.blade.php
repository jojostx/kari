<x-partials.admin-index :hasAction="true">
    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="link">
        <button wire:click="seedData" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:text-gray-100 hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white">
            <span>Seed Data</span>
        </button>
    </x-slot>

    <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-2 lg:gap-8">
        <div class="p-2 space-y-2 bg-white shadow rounded-xl">
            <div class="space-y-2">
                <div class="px-4 py-2 space-y-4">
                    <div class="flex items-center h-12 space-x-4 rtl:space-x-reverse">
                        <div class="w-10 h-10 bg-gray-400 bg-center bg-cover rounded-full" style="background-image: url('https://ui-avatars.com/api/?name=Onyedika+Ikuru&color=FFFFFF&background=111827')"></div>

                        <div>
                            <h2 class="text-lg font-bold tracking-tight sm:text-xl">
                                Welcome, Onyedika Ikuru
                            </h2>

                            <p class="text-sm">
                                <a href="{{ route('admin.logout') }}" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:underline">
                                    Sign out
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($this->commandStatus === 700)
    <p>
        
    </p>
    @elseif ($this->commandStatus === 0)
    <x-alert-toast>
        <p>
            database seeding was successful
        </p>
    </x-alert-toast>
    @else
    <x-alert-toast>
        <p>
            database seeding was unsuccessful
        </p>
    </x-alert-toast>
    @endif
</x-partials.admin-index>