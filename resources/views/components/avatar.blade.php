@props(['hasNotification' => false])

<span class="relative inline-block">
    <img {{ $attributes }}>

    @if($hasNotification)
        <span class="absolute top-0 right-0 block h-1.5 w-1.5 rounded-full bg-gray-300 ring-2 ring-white"></span>
    @endif
</span>
