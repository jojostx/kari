<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
      Payouts
    </x-slot>

    {{ $this->table }}

    @livewire('admin.components.payout-approval-modal')
</x-partials.admin-index>