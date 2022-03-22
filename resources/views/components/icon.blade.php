@props(['name', 'size' => 'text-base'])

@if(str()->of($name ?? null)->isNotEmpty())    
    @if($name !== 'spinner')        
        <i {{ $attributes->class(['inline-flex justify-center items-center', $size, 'bx', 'bx-'.$name]) }}></i>
    @else
        <i class='{{ $attributes->merge(['class' => trim($size . ' animate-spin bx bx-loader-alt')]) }}'></i>
    @endif
@endisset


