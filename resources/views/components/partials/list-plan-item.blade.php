@props(['plan'])

<div class="col-span-1 flex items-center px-3 py-3 bg-[#F1F1F1] border-b border-gray-300 rounded-md shadow-md sm:px-4 sm:pt-4">
  <div class="flex items-center justify-center h-24 p-3 bg-white rounded-md shrink w-28">
    {!! $plan['icon'] !!}
  </div>
  <div class="grid w-full grid-cols-2 grid-rows-3 gap-2 ml-3">
    <div>
      <p class="text-xs font-semibold text-gray-500">Type</p>
      <h2 class="text-sm font-semibold text-gray-800 uppercase"> {{ $plan['name'] }} </h2>
    </div>
    <div>
      <x-button-link href="{{ route('admin.investment.plans.edit', ['plan' => $plan]) }}" class="px-2 py-1 hover:text-white">
        Edit
      </x-button-link>
    </div>
    <div>
      <p class="text-xs font-semibold text-gray-500 ">Principal</p>
      <h2 class="text-sm font-semibold text-gray-800">£{{ number_format($plan['principal']) }}</h2>
    </div>
    <div>
      <p class="text-xs font-semibold text-gray-500">Interest</p>
      <h2 class="text-sm font-semibold text-gray-800">{{ floatval($plan['interest']) * 100 }}%</h2>
    </div>
    <div>
      <p class="text-xs font-semibold text-gray-500">Bonus</p>
      <h2 class="text-sm font-semibold text-gray-800">{{ floatval($plan['bonus']) * 100 }}%</h2>
    </div>
    <div>
      <p class="text-xs font-semibold text-gray-500">Created At</p>
      <h2 class="text-sm font-semibold text-gray-800">{{ $plan['created_at']->toFormattedDateString() }}</h2>
    </div>
  </div>
</div>