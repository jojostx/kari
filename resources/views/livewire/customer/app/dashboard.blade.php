<div class="flex flex-col items-center w-full mt-6">
    <div class="w-full max-w-[840px] mx-auto px-4 md:px-6 lg:px-8">

        <p class="mb-4 text-sm font-bold tracking-wide sm:text-base">INVESTMENTS</p>

        <!-- desktop summary card -->
        <div class="items-center justify-between hidden p-6 bg-white border rounded-lg shadow-sm sm:flex">
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
            </div>
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi }}</h2>
            </div>
            <div class="">
                <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
            </div>
        </div>

        <!-- mobile summary card -->
        <div class="flex flex-wrap items-center justify-between mt-8 overflow-hidden bg-white border-b border-gray-200 rounded-lg shadow-sm sm:hidden">
            <div class="w-full rounded-t-lg bg-[#DFDFDF] p-4">
                <div class="m-2 mb-5">
                    <p class="text-sm font-semibold text-gray-500">Total Principal</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ number_format($total_principal) }}</h2>
                </div>
                <div class="m-2">
                    <p class="text-sm font-semibold text-gray-500">Total Expected Amount</p>
                    <h2 class="text-xl font-semibold text-gray-800">£ {{ $total_roi }}</h2>
                </div>
            </div>
            <div class="w-full p-4 m-2 sm:w-min ">
                <div class="flex items-center justify-between mb-3">
                    <p class="text-sm font-semibold text-gray-500">Total Investments</p>
                    <h2 class="text-xl font-semibold text-gray-800">{{ $total_investments }}</h2>
                </div>
                <div class="border-4 rounded-lg py-4 px-2 gap-4 border-[#DFDFDF] grid grid-cols-2 grid-rows-2">
                    @foreach ($plans as $plan)
                    <div class="flex flex-col items-center">
                        <span class="flex justify-center w-14">
                            {!! $plan->icon !!}
                        </span>
                        <p class="mt-2 text-xs font-semibold text-gray-700">
                            {{ $plan->subCount }} {{ $plan->name }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>