<div>
    <div class="space-y-6">
        <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
            <h1 aria-label="faq" class="text-2xl font-bold tracking-tight md:text-3xl">
                FAQs
            </h1>
            <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                <a href="{{ route('admin.static.faqs.create') }}" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:text-gray-100 hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white">
                    <span>New FAQ</span>
                </a>
            </div>
        </header>
        <div>
             {{ $this->table }}
        </div>
    </div>
</div>