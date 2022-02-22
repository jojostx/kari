<x-partials.admin-index :hasAction="true">
    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="link">
        <button wire:click="seedData" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:text-gray-100 hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white">
            <span>Seed Data</span>
        </button>
    </x-slot>

    <div class="">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 col-span-full">
            <x-partials.admin-dashboard-card>
                <x-slot name="icon">
                    <svg class="w-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </x-slot>
                <x-slot name="admin_link">
                    <a href="{{ route('admin.investment.customers.index') }}" class="p-4 transition duration-500 ease-in-out hover:pr-0 hover:text-blue-600 focus:text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </x-slot>

                <x-slot name="stats">
                    <p class="text-sm font-medium text-gray-600">
                        Total Customers
                    </p>
                    <h1 class="text-2xl font-medium md:text-3xl">
                        {{ $this->total_customers }}
                    </h1>
                </x-slot>
                <x-slot name="tags">
                    <x-status-tag :tag="'unverified'" :stat="$this->total_unverified_customers" :color="'danger'" />
                    <x-status-tag :tag="'verified'" :stat="$this->total_verified_customers" :color="'success'" />
                </x-slot>
            </x-partials.admin-dashboard-card>

            <x-partials.admin-dashboard-card>
                <x-slot name="icon">
                    <svg class="w-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </x-slot>
                <x-slot name="admin_link">
                    <a href="{{ route('admin.investment.payments.index') }}" class="p-4 transition duration-500 ease-in-out hover:pr-0 hover:text-blue-600 focus:text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </x-slot>
                <x-slot name="stats">
                    <p class="text-sm font-medium text-gray-600">
                        Total Payments
                    </p>
                    <h1 class="text-2xl font-medium md:text-3xl">
                        {{ $this->total_payments }}
                    </h1>
                </x-slot>
                <x-slot name="tags">
                    <x-status-tag :tag="'pending'" :stat="$this->total_pending_payments" :color="'danger'" />
                    <x-status-tag :tag="'approved'" :stat="$this->total_approved_payments" :color="'success'" />
                </x-slot>
            </x-partials.admin-dashboard-card>

            <x-partials.admin-dashboard-card>
                <x-slot name="icon">
                    <svg class="w-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                    </svg>
                </x-slot>
                <x-slot name="admin_link">
                    <a href="{{ route('admin.investment.subscriptions.index') }}" class="p-4 transition duration-500 ease-in-out hover:pr-0 hover:text-blue-600 focus:text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </x-slot>
                <x-slot name="stats">
                    <p class="text-sm font-medium text-gray-600">
                        Total Subscriptions
                    </p>
                    <h1 class="text-2xl font-medium md:text-3xl">
                        {{ $this->total_subscriptions }}
                    </h1>
                </x-slot>
                <x-slot name="tags">
                    <x-status-tag :tag="'expired'" :stat="$this->total_expired_subscriptions" :color="'danger'" />
                    <x-status-tag :tag="'ongoing'" :stat="$this->total_ongoing_subscriptions" :color="'success'" />
                </x-slot>
            </x-partials.admin-dashboard-card>

            <x-partials.admin-dashboard-card>
                <x-slot name="icon">
                    <svg class="w-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </x-slot>
                <x-slot name="admin_link">
                    <a href="{{ route('admin.investment.payouts.index') }}" class="p-4 transition duration-500 ease-in-out hover:pr-0 hover:text-blue-600 focus:text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </x-slot>
                <x-slot name="stats">
                    <p class="text-sm font-medium text-gray-600">
                        Total Payouts
                    </p>
                    <h1 class="text-2xl font-medium md:text-3xl">
                        {{ $this->total_payouts }}
                    </h1>
                </x-slot>
                <x-slot name="tags">
                    <x-status-tag :tag="'created'" :stat="$this->total_created_payouts" :color="'primary'" />
                    <x-status-tag :tag="'pending'" :stat="$this->total_requested_payouts" :color="'danger'" />
                    <x-status-tag :tag="'withdrawn'" :stat="$this->total_withdrawn_payouts" :color="'success'" />
                </x-slot>
            </x-partials.admin-dashboard-card>
        </div>
    </div>

    <div>
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
    </div>
</x-partials.admin-index>