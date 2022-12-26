@aware(['size' => 'lg'])

<div {{ $attributes->merge(['class' => 'relative z-50']) }}
     x-dialog
     style="display: none"
>
    <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div x-dialog:panel x-transition
                @class([
                   'relative',
                   'transform',
                   'overflow-hidden',
                   'rounded-lg',
                   'bg-white',
                   'text-left',
                   'shadow-xl',
                   'sm:my-8',
                   'sm:w-full',
                   'sm:max-w-xl' => $size === 'xl',
                   'sm:max-w-lg' => $size === 'lg',
                   'sm:max-w-md' => $size === 'md',
                   'sm:max-w-sm' => $size === 'sm',
                   'sm:max-w-xs' => $size === 'xs',
                ])
            >
                <div class="absolute top-0 right-0 hidden pt-5 pr-5 sm:pt-6 sm:pr-6 sm:block">
                    <button type="button"
                            x-on:click="$dialog.close()"
                            class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Fechar</span>
                        <x-icon.x-mark class="h-6 w-6"/>
                    </button>
                </div>
                <div class="bg-white p-5 sm:p-6">
                    <div class="sm:flex sm:items-start">
                        @isset($icon)
                            <div {{ $icon->attributes->merge(['class' => 'mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full sm:mx-0 sm:h-10 sm:w-10 sm:mr-4 mb-3 sm:mb-0']) }}>
                                {{ $icon }}
                            </div>
                        @endisset
                        <div class="text-center sm:text-left flex-1">
                            @isset($title)
                                <h3 x-dialog:title
                                    {{ $title->attributes->merge(['class' => 'text-lg font-medium leading-6 text-gray-900']) }} id="{{ str()->slug($title) }}">{{ $title }}</h3>
                            @endisset

                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @isset($buttons)
                    <div {{ $buttons->attributes->merge(['class' => 'bg-gray-50 px-4 py-3 sm:px-6 sm:flex-row-reverse flex gap-3 flex-col sm:flex-row justify-center sm:justify-start']) }}>
                        {{ $buttons }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
</div>

