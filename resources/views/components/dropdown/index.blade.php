@props(['label' => null])

<div x-data x-menu {{ $attributes->merge(['class' => 'relative inline-block text-left']) }}>
    <div class="flex items-stretch min-h-full" x-menu:button>
        @if($slot->isEmpty())
            <x-button rightIcon="chevron-down" color="white">{{ $label }}</x-button>
        @else
            {{ $slot }}
        @endif
    </div>

    @if(isset($items) || $slot->isNotEmpty())
        <div x-menu:items x-transition.origin.top.right
             class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-gray-200 focus:outline-none"
             role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
                {{ $items }}
            </div>
        </div>
    @endif
</div>
