@props([
    'multiple' => false, 
    'choicesOptions' => null,
    'disabled' => false
])

<div 
    {{ $attributes }} 

    @if(!is_null($choicesOptions))
    x-data="Select({{ json_encode($choicesOptions) }})"
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
