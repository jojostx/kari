<x-partials.admin-index :hasAction="false">
    <x-slot name="title">
        Plans
    </x-slot>

    <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-2 md:gap-8">
        @foreach ($plans as $plan)
            <x-partials.list-plan-item :plan="$plan" />
        @endforeach
    </div>
</x-partials.admin-index>