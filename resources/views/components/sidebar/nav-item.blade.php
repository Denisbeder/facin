
@props(['url', 'label', 'icon'])

<a href="{{ $url }}" type="button" @class([
        'group rounded-md px-4 py-2 flex items-center font-semibold text-slate-500 transition-colors duration-500 hover:bg-indigo-50 hover:text-indigo-500',
        'bg-indigo-50 text-indigo-500' => request()->is(trim($url, '/') . '*')
    ])>
    <x-icon name="{{ $icon }}" size="text-lg" class="group-hover:text-indigo-500 h-4 mr-2 transition-colors duration-500" /> {{ $label }}
</a>
