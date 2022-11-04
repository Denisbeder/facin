@aware([
    'asHeader' => false,
    'ordeable' => false,
    'direction' => null,
 ])

@php
    $classList = [
        'before:content-[attr(data-header)] before:flex before:absolute before:left-4 before:w-full before:whitespace-nowrap md:before:hidden' => isset($header),
        'before:w-16 before:pr-4 before:text-xs before:truncate before:text-slate-500 before:font-bold before:uppercase' => isset($header),
        'ml-20 md:ml-0' => isset($header),
        'text-sm' => !$asHeader,
        'flex justify-start items-center',
        'px-2 first:pl-0 last:pr-0',
        'mb-2 md:mb-0',
        'flex-1',
    ]
@endphp

<div {{ $attributes->merge(['class' => Arr::toCssClasses($classList)]) }} data-header="{{ $header ?? null }}">
    @unless($ordeable)
        {{ $slot }}
    @else
        <button type="button" class="flex items-center text-slate-500 text-xs font-bold uppercase" >
            {{ $slot }}
            @if($direction === 'asc')
                <x-icon name="chevron-up" class="ml-1 w-3 h-3" />
            @endif

            @if($direction === 'desc')
                <x-icon name="chevron-down" class="ml-1 w-3 h-3" />
            @endif
        </button>
    @endunless
</div>
