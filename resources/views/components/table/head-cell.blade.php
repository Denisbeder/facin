@props([
    'order' => false
])

<th scope="col" {{ $attributes->merge(['class' => 'py-3.5 px-3 text-left text-sm font-semibold text-gray-900 last:pr-6 first:pl-6']) }}>
    @if($order)
        <button class="group inline-flex items-center">
            {{ $slot }}
            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
            <span class="invisible ml-2 flex items-center rounded text-gray-400 group-hover:visible group-focus:visible mt-1">
                <x-icon.chevron-down class="h-3 w-3" />
            </span>
        </button>
    @else
        {{ $slot }}
    @endif
</th>
