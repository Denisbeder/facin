
@props(['url', 'label' => null, 'icon' => null, 'iconSize' => 'text-base'])

<a href="{{ $url }}" type="button" @class([
        'group rounded-md px-4 py-2 flex items-center whitespace-nowrap font-semibold text-slate-500 transition-colors duration-300 hover:bg-indigo-50 hover:text-indigo-500',
        'mb-1 last:mb-0',
        'bg-indigo-50 text-indigo-500' => request()->is(trim($url, '/') . '*')
    ])>

    @isset($icon)
    <x-icon 
        name="{{ $icon }}" 
        size="{{ $iconSize }}" 
        class="group-hover:text-indigo-500 transition-colors duration-300 mr-2"
    /> 
    @endisset

    {{ $label ?? $slot }}
</a>
