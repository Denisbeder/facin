@props(['isRowHeader' => true])

<div {{ $attributes->merge(['class' => 'hidden md:flex mb-2 px-4 justify-between w-full text-slate-500 text-xs font-bold uppercase whitespace-nowrap']) }}>
    {{ $slot }}
</div>