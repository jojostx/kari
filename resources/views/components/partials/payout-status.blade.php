@if ($state == App\Models\Payout::CREATED)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight bg-blue-200 rounded-full cursor-text hover:no-underline text-primary-600 focus:no-underline focus:text-primary-600">
  created
</span>
@elseif ($state == App\Models\Payout::WITHDRAWN)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight bg-success-100 rounded-full cursor-text hover:no-underline text-success-600 focus:no-underline">
  withdrawn
</span>
@else
<p class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md cursor-pointer hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">Approve</p>
@endif