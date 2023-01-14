@props([
    'name',
    'value',
    'label',
    'description' => false,
    'icon' => false
])

<label
    class="relative select-none flex flex-col cursor-pointer rounded-lg border border-gray-200 bg-white p-4 focus:border-indigo-500 focus:outline-none"
    :class="selected === '{{ $value }}' && 'bg-indigo-50/30 hover:bg-indigo-50/60'"
    @click="selected = '{{ $value }}'"
>
    <input
        tabindex="-1"
        type="radio"
        name="{{ str()->slug($name) }}"
        value="{{ $value }}"
        class="sr-only"
        aria-labelledby="{{ str()->slug($name) }}-{{ $value }}-label"
        aria-describedby="{{ str()->slug($name) }}-{{ $value }}-description"
    >

    @if($icon)
    <span class="text-gray-400" :class="selected === '{{ $value }}' && 'text-indigo-500'">
        <x-dynamic-component component="icon.{{ $icon }}" class="h-8 w-8" />
    </span>
    @endif

    <span class="flex flex-1 mt-3">
        <span class="flex flex-col">
          <span id="{{ str()->slug($name) }}-{{ $value }}-label" class="block text-sm font-semibold text-gray-900" :class="selected === '{{ $value }}' && 'text-indigo-500'">{{ $label }}</span>
          <span id="{{ str()->slug($name) }}-{{ $value }}-description" class="mt-1 flex items-center text-sm text-gray-500">{{ $description }}</span>
        </span>

        <x-icon.check-circle class="h-5 w-5 text-indigo-600 absolute top-4 right-4" ::class="selected !== '{{ $value }}' && 'invisible'" />
    </span>

    <span
        class="pointer-events-none absolute -inset-px rounded-md"
        :class="selected === '{{ $value }}' && 'border-2 border-indigo-500'"
        aria-hidden="true"
    ></span>
</label>
