@if ($record->refcode && !$state)
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight bg-blue-200 rounded-full cursor-text hover:no-underline text-primary-600 focus:no-underline focus:text-primary-600">
  Pending
</span>
@else
<span class="inline-flex items-center justify-center h-6 px-2 text-sm font-medium tracking-tight rounded-full bg-danger-100 cursor-text hover:no-underline text-danger-600 focus:no-underline">
  Incomplete
</span>
@endif