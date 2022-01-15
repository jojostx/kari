<div>
    <div class="space-y-6">
        <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
            <h1 class="text-2xl font-bold tracking-tight md:text-3xl">
                Dashboard
            </h1>
        </header>
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
    </div>
</div>