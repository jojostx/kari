<div>
    <div class="space-y-6">
        <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
            <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                Edit {{ $plan['name'] }}
            </h1>
        </header>
        <div class="grid grid-cols-1 gap-4 mb-6 lg:grid-cols-2 lg:gap-8">
            <form class="space-y-6" wire:submit.prevent="save">
                {{ $this->form }}

                <div class="flex flex-wrap items-center justify-start gap-4">
                    <button type="submit" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white">
                        <span>Save</span>
                    </button>
                    <a href="{{ route('admin.investment.plans.index') }}" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-gray-800 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-9 hover:bg-gray-50 focus:ring-primary-600 focus:text-primary-600 focus:bg-primary-50 focus:border-primary-600">
                        <span>Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>