<div class="grid min-h-screen grid-cols-2">
    <div class="relative hidden lg:block">
    </div>

    <div class="fixed inset-y-0 flex-row justify-center hidden w-1/2 h-full bg-center bg-cover lg:flex pb-14 pt-28 md:py-24 bg-point-mobile md:bg-point">
        <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-gray-900">
        </div>

        <div class="relative flex flex-col items-center justify-center">
            <x-application-logo class="w-48 mb-6 text-white fill-current" />
            <p class="text-xl font-semibold text-white">KARI INVESTMENT</p>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center h-full p-4 pt-6 bg-gray-100 md:p-8 col-span-full lg:col-span-1 sm:pt-0">
        <div class="pt-6">
            {{ $logo }}
        </div>

        <div class="w-full max-w-[416px] px-6 py-4 mt-6 overflow-hidden text-sm bg-white shadow-md sm:max-w-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>