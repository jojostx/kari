@if ($state == App\Models\Payout::CREATED)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight bg-blue-200 rounded-full cursor-text hover:no-underline text-primary-600 focus:no-underline focus:text-primary-600">
  created
</span>
@elseif ($state == App\Models\Payout::WITHDRAWN)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-success-100 cursor-text hover:no-underline text-success-600 focus:no-underline">
  withdrawn
</span>
@elseif ($state == App\Models\Payout::REQUESTED)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-danger-100 cursor-text hover:no-underline text-danger-600 focus:no-underline">
  pending
</span>
@endif