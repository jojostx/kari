<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
      Payments
    </x-slot>

    <x-slot name="link">
        <a href="{{ route('admin.static.faqs.create') }}" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:text-gray-100 hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white">
            <span>New FAQ</span>
        </a>
    </x-slot>

    {{ $this->table }}

    @livewire('admin.components.payment-approval-modal')
</x-partials.admin-index>