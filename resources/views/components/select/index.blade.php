@props([
    'multiple' => false, 
    'disabled' => false
])

<div {{ $attributes }} >
    <select 
        data-select
        class="select" 
        @if($multiple) 
        multiple 
        @endif

        @if($disabled)
        disabled
        @endif
    >
        {{ $slot }}
    </select>
</div>
