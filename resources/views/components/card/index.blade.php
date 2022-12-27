<div {{ $attributes->merge(['class' => 'divide-y divide-gray-200 overflow-hidden rounded-md bg-white border border-gray-200']) }}>
    @isset($header)
        <div {{ $header->attributes->merge(['class' => 'px-4 py-5 sm:px-6']) }}>
            {{ $header }}
        </div>
    @endisset

    @isset($body)
        <div {{ $body->attributes->merge(['class' => 'px-4 py-5 sm:p-6']) }}>
            {{ $body }}
        </div>
    @endisset

    @isset($footer)
        <div {{ $footer->attributes->merge(['class' => 'px-4 py-5 sm:px-6']) }}>
            {{ $footer }}
        </div>
    @endisset

    {{ $slot }}
</div>
