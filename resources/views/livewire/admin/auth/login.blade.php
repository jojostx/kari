<form wire:submit.prevent="authenticate" class="p-8 space-y-8 bg-white border border-gray-300 shadow rounded-2xl">
    <h2 class="text-2xl font-bold tracking-tight text-center">
        Sign in to your account
    </h2>

    <div class="grid grid-cols-1 gap-6">
        <div class="col-span-1 ">
            <div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="email">
                            <span class="text-sm font-medium leading-4 text-gray-700">
                                Email address
                                <sup class="font-medium text-red-700">*</sup>
                            </span>
                        </label>
                    </div>
                    <div class="flex items-center space-x-1 group">
                        <div class="flex-1">
                            <input wire:model.defer="email" type="email" autocomplete="on" id="email" required class="block w-full h-10 duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:ring-opacity-30" />
                        </div>
                    </div>
                    @error('email') <p class="text-sm text-red-500 error">{{ $message }}</p> @enderror
                </div>
            </div>

        </div>
        <div class="col-span-1 ">
            <div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="password">
                            <span class="text-sm font-medium leading-4 text-gray-700">
                                Password
                                <sup class="font-medium text-red-700">*</sup>
                            </span>
                        </label>
                    </div>
                    <div class="flex items-center space-x-1 group">
                        <div class="flex-1">
                            <input wire:model.defer="password" type="password" id="password" required class="block w-full h-10 duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:ring-opacity-30" />
                        </div>
                    </div>
                    @error('password') <p class="text-sm text-red-500 error">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        <div class="col-span-1 ">
            <div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                        <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="remember">
                            <input wire:model.defer="remember" id="remember" type="checkbox" class="text-blue-600 duration-75 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-600 focus:ring-opacity-30" />
                            <span class="text-sm font-medium leading-4 text-gray-700">
                                Remember me
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="inline-flex items-center justify-center w-full px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-800 focus:bg-gray-700 focus:ring-offset-blue-700 h-9 focus:ring-white">
        <span>Log in</span>
    </button>
</form>