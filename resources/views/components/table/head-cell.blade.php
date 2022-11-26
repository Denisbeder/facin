@props(['ordeable' => false, 'direction' => false])

<th scope="col" {{ $attributes->merge(['class' => 'py-3.5 px-3 text-left text-sm font-semibold text-gray-900 last:pr-6 first:pl-6']) }}>
    @if($ordeable)
        <button class="group inline-flex items-center">
            {{ $slot }}
            <span @class([
                'bg-gray-200 text-gray-900 group-hover:bg-gray-300 visible' => $direction,
                'invisible text-gray-400 group-hover:visible group-focus:visible' => !$direction,
                'ml-2',
                'flex',
                'items-center',
                'rounded',
                'mt-0.5',
            ])>
                @if($direction === 'asc')
                    <x-icon.chevron-up class="h-4 w-4" />
                @else
                    <x-icon.chevron-down class="h-4 w-4" />
                @endif
            </span>
        </button>
    @else
        {{ $slot }}
    @endif
</th>
