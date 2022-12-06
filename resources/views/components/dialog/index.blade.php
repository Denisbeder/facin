<div {{ $attributes->merge(['class' => 'relative z-50']) }}
     @isset($title)
     aria-labelledby="{{ $title }}"
     @endisset
     role="dialog"
     aria-modal="true"
>
    <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
            >
                <div class="absolute top-0 right-0 hidden pt-5 pr-5 sm:pt-6 sm:pr-6 sm:block">
                    <button type="button"
                            class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Fechar</span>
                        <x-icon.x-mark class="h-6 w-6" />
                    </button>
                </div>
                <div class="bg-white p-5 sm:p-6">
                    <div class="sm:flex sm:items-start">
                        @isset($icon)
                        <div {{ $icon->attributes->merge(['class' => 'mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full sm:mx-0 sm:h-10 sm:w-10 sm:mr-4 mb-3 sm:mb-0']) }}>
                            {{ $icon }}
                        </div>
                        @endisset
                        <div class="text-center sm:text-left">
                            @isset($title)
                            <h3 {{ $title->attributes->merge(['class' => 'text-lg font-medium leading-6 text-gray-900 mb-2']) }} id="{{ str()->slug($title) }}">{{ $title }}</h3>
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

