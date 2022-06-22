@props(['multiple' => false])

<div {{ $attributes }} x-data="Select">
    <select class="select" x-ref="select" @if($multiple) multiple @endif>
        {{ $slot }}
    </select>
</div>
