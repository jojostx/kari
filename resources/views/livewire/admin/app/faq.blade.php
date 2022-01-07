<div>
    <div class="space-y-6">
        <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-4">
            <h1 aria-label="faq" class="text-2xl font-bold tracking-tight md:text-3xl">
                FAQs
            </h1>
            <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                <a class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-700 focus:bg-gray-800 focus:ring-offset-gray-700 h-9 focus:ring-white" href="https://demo.filamentadmin.com/shop/categories/create">
                    <span>New FAQ</span>
                </a>
            </div>
        </header>
        <div>
            <div class="bg-white border border-gray-300 shadow-sm rounded-xl">
                <div class="divide-y">
                    <div class="flex items-center justify-between p-2 h-14">
                        <div class="flex items-center w-full gap-2 md:w-auto md:max-w-md">
                            <div class="flex-1">
                                <div>
                                    <label for="tableSearchQueryInput" class="sr-only">
                                        Search
                                    </label>

                                    <div class="relative group">
                                        <span class="absolute inset-y-0 left-0 flex items-center justify-center text-gray-400 pointer-events-none w-9 h-9 group-focus-within:text-gray-500">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg> </span>

                                        <input wire:model.debounce.1s="tableSearchQuery" id="tableSearchQueryInput" placeholder="Search" type="search" autocomplete="off" class="block w-full placeholder-gray-400 duration-75 border-gray-200 rounded-lg shadow-sm h-9 pl-9 focus:border-gray-600 focus:ring-1 focus:ring-inset focus:ring-gray-600">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="relative overflow-y-auto border-t">
                    <table aria-label="Faqs table" class="w-full text-left divide-y table-auto rtl:text-right">
                        <thead>
                            <tr class="bg-gray-50">
                                <th id="input" class="w-4 px-4 whitespace-nowrap">
                                    <input wire:click="toggleSelectTableRecordsOnPage" type="checkbox" class="text-gray-600 border-gray-300 rounded shadow-sm focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                                </th>

                                <th class="px-4 py-2">
                                    <button wire:click="sortTable('name')" type="button" class="flex items-center space-x-1 text-sm font-medium text-gray-600 whitespace-nowrap rtl:space-x-reverse">
                                        <span>
                                            Name
                                        </span>

                                    </button>
                                </th>
                                <th class="px-4 py-2">
                                    <button wire:click="sortTable('parent.name')" type="button" class="flex items-center space-x-1 text-sm font-medium text-gray-600 whitespace-nowrap rtl:space-x-reverse">
                                        <span>
                                            Parent
                                        </span>

                                    </button>
                                </th>
                                <th class="px-4 py-2">
                                    <button wire:click="sortTable('is_visible')" type="button" class="flex items-center space-x-1 text-sm font-medium text-gray-600 whitespace-nowrap rtl:space-x-reverse">
                                        <span>
                                            Visibility
                                        </span>

                                    </button>
                                </th>
                                <th class="px-4 py-2">
                                    <button wire:click="sortTable('updated_at')" type="button" class="flex items-center space-x-1 text-sm font-medium text-gray-600 whitespace-nowrap rtl:space-x-reverse">
                                        <span>
                                            Updated Date
                                        </span>

                                    </button>
                                </th>

                                <th class="w-5"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y whitespace-nowrap">
                            <tr wire:key="84">
                                <th class="w-4 px-4 whitespace-nowrap">
                                    <input wire:click="toggleSelectTableRecord('84')" type="checkbox" class="text-gray-600 border-gray-300 rounded shadow-sm focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                                </th>


                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/84/edit" class="block">
                                        <div class="px-4 py-3">
                                            Cat
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/84/edit" class="block">
                                        <div class="px-4 py-3">
                                            Cat
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/84/edit" class="block">
                                        <div class="px-4 py-3">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/84/edit" class="block">
                                        <div class="px-4 py-3">
                                            Jan 7, 2022
                                        </div>
                                    </a>
                                </td>

                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-4">
                                        <a class="text-sm font-medium text-blue-600 hover:underline focus:outline-none focus:underline hover:text-blue-500" href="https://demo.filamentadmin.com/shop/categories/84/edit">
                                            Edit
                                        </a>

                                    </div>
                                </td>
                            </tr>

                            <tr wire:key="85">
                                <th class="w-4 px-4 whitespace-nowrap">
                                    <input wire:click="toggleSelectTableRecord('85')" type="checkbox" class="text-gray-600 border-gray-300 rounded shadow-sm focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                                </th>


                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/85/edit" class="block">
                                        <div class="px-4 py-3">
                                            Food
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/85/edit" class="block">
                                        <div class="px-4 py-3">
                                            Cat
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/85/edit" class="block">
                                        <div class="px-4 py-3">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/85/edit" class="block">
                                        <div class="px-4 py-3">
                                            Jan 7, 2022
                                        </div>
                                    </a>
                                </td>

                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-4">
                                    <a class="text-sm font-medium text-blue-600 hover:underline focus:outline-none focus:underline hover:text-blue-500" href="https://demo.filamentadmin.com/shop/categories/85/edit">
                                            Edit
                                        </a>

                                    </div>
                                </td>
                            </tr>

                            <tr wire:key="86">
                                <th class="w-4 px-4 whitespace-nowrap">
                                    <input wire:click="toggleSelectTableRecord('86')" type="checkbox" class="text-gray-600 border-gray-300 rounded shadow-sm focus:border-gray-600 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
                                </th>


                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/86/edit" class="block">
                                        <div class="px-4 py-3">
                                            Nola Kramer
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/86/edit" class="block">
                                        <div class="px-4 py-3">
                                            Cat
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/86/edit" class="block">
                                        <div class="px-4 py-3">
                                            <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <a href="https://demo.filamentadmin.com/shop/categories/86/edit" class="block">
                                        <div class="px-4 py-3">
                                            Jan 7, 2022
                                        </div>
                                    </a>
                                </td>

                                <td class="px-4 py-3 whitespace-nowrap">
                                    <div class="flex items-center justify-center gap-4">
                                    <a class="text-sm font-medium text-blue-600 hover:underline focus:outline-none focus:underline hover:text-blue-500" href="https://demo.filamentadmin.com/shop/categories/86/edit">
                                            Edit
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-2 border-t">
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                        <div class="flex items-center justify-between flex-1 lg:hidden">
                            <div class="w-10">
                            </div>

                            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                <select wire:model="tableRecordsPerPage" id="tableRecordsPerPageSelect" class="h-8 pr-8 text-sm leading-none duration-75 border-gray-200 rounded-lg shadow-sm focus:border-gray-600 focus:ring-1 focus:ring-inset focus:ring-gray-600">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>

                                <label for="tableRecordsPerPageSelect" class="text-sm font-medium">
                                    per page
                                </label>
                            </div>

                            <div class="w-10">
                            </div>
                        </div>

                        <div class="items-center flex-1 hidden grid-cols-3 lg:grid">
                            <div class="flex items-center">
                                <div class="pl-2 text-sm font-medium">
                                    Showing 1 to 3 of 3 results
                                </div>
                            </div>

                            <div class="flex items-center justify-center">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                    <select wire:model="tableRecordsPerPage" id="tableRecordsPerPageSelect" class="h-8 pr-8 text-sm leading-none duration-75 border-gray-200 rounded-lg shadow-sm focus:border-gray-600 focus:ring-1 focus:ring-inset focus:ring-gray-600">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                    </select>

                                    <label for="tableRecordsPerPageSelect" class="text-sm font-medium">
                                        per page
                                    </label>
                                </div>
                            </div>

                            <div class="flex items-center justify-end">
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <form wire:submit.prevent="callMountedTableAction">
                <div x-data="{ isOpen: false }" x-on:close-modal.window="if ($event.detail.id === 'App\\Filament\\Resources\\Shop\\CategoryResource\\Pages\\ListCategories-action') isOpen = false" x-on:open-modal.window="if ($event.detail.id === 'App\\Filament\\Resources\\Shop\\CategoryResource\\Pages\\ListCategories-action') isOpen = true" role="dialog" aria-modal="true" class="block">
                    <div x-show="isOpen" x-transition:enter="ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak="" class="fixed inset-0 z-40 flex items-center min-h-screen p-4 overflow-y-auto">
                        <button x-on:click="isOpen = false" type="button" aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/50 focus:outline-none"></button>

                        <div x-show="isOpen" x-trap="isOpen" x-on:keydown.window.escape="isOpen = false" x-transition:enter="ease duration-300" x-transition:enter-start="translate-y-8" x-transition:enter-end="translate-y-0" x-transition:leave="ease duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-8" x-cloak="" class="relative w-full mt-auto cursor-pointer md:mb-auto">
                            <div class="w-full max-w-sm p-2 mx-auto space-y-2 bg-white cursor-default rounded-xl">
                                <div class="space-y-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form wire:submit.prevent="callMountedTableBulkAction">
                <div x-data="{ isOpen: false }" x-on:close-modal.window="if ($event.detail.id === 'App\\Filament\\Resources\\Shop\\CategoryResource\\Pages\\ListCategories-bulk-action') isOpen = false" x-on:open-modal.window="if ($event.detail.id === 'App\\Filament\\Resources\\Shop\\CategoryResource\\Pages\\ListCategories-bulk-action') isOpen = true" role="dialog" aria-modal="true" class="block">
                    <div x-show="isOpen" x-transition:enter="ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak="" class="fixed inset-0 z-40 flex items-center min-h-screen p-4 overflow-y-auto">
                        <button x-on:click="isOpen = false" type="button" aria-hidden="true" class="fixed inset-0 w-full h-full bg-black/50 focus:outline-none"></button>

                        <div x-show="isOpen" x-trap="isOpen" x-on:keydown.window.escape="isOpen = false" x-transition:enter="ease duration-300" x-transition:enter-start="translate-y-8" x-transition:enter-end="translate-y-0" x-transition:leave="ease duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-8" x-cloak="" class="relative w-full mt-auto cursor-pointer md:mb-auto">
                            <div class="w-full max-w-sm p-2 mx-auto space-y-2 bg-white cursor-default rounded-xl">
                                <div class="space-y-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>