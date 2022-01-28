<x-forms::field-wrapper :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()" :hint="$getHint()" :required="$isRequired()" :state-path="$getStatePath()">

  <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }">
    <div class="space-y-2">
      <div class="flex items-center space-x-1 group">
        <div class="flex flex-1">
          <span class="inline-flex items-center px-3 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 whitespace-nowrap group-focus-within:text-primary-500 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
            %
          </span>
          <input wire:model.defer="{{ $getStatePath() }}" type="number" id="{{ $getId() }}" inputmode="numeric" step="1" min="1" max="100" required="" required="{{ $isRequired() }}" class="w-full h-10 transition duration-75 border-gray-300 shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600 rounded-none rounded-r-lg bg-gray-50 border text-gray-900 block flex-1 min-w-0 text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>
    </div>
  </div>
</x-forms::field-wrapper>