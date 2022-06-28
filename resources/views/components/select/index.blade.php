@props([
    'multiple' => false, 
    'disabled' => false,
    'choicesOptions' => null,
])

<div 
    {{ $attributes }} 

    @if(!is_null($choicesOptions))
    x-data="Select({{ JS::jsonEncode($choicesOptions) }})"
    @else
    x-data="Select"
    @endif
>
    <select 
        class="select" 
        x-ref="select" 
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
