<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
        Settings
    </x-slot>

    <div class="">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 col-span-full">
            <x-admin-account-settings-menu />
        </div>
    </div>
</x-partials.admin-index>