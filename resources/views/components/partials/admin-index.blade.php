@props(['hasAction' => false])

<div>
    <div class="space-y-6">
        <header class="items-start justify-between space-y-2 sm:flex sm:space-y-0 sm:space-x-4 sm:py-2">
            <h1 aria-label="faq" class="text-2xl font-bold tracking-tight md:text-3xl">
                {{ $title }}
            </h1>

            @if ($hasAction)
            <div class="flex flex-wrap items-center justify-start gap-4 shrink-0">
                {{ $link }}
            </div>
            @endif

        </header>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>