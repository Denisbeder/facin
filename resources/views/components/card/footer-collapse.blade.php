@props(['title'])

<x-card.footer class="p-0 mt-4 bg-slate-50/10">
    <x-collapse class="px-6 pt-6 relative rounded-b-md" rightIcon>
        <x-slot name="heading" 
            sizeIcon="text-md"
            class="font-bold absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 justify-center bg-white text-slate-400 hover:text-slate-500 transition-colors duration-500 text-xs py-1 px-3 rounded-full border">
            <div class="pl-1 mr-1">
                @isset($title)
                    {{ $title }}
                @else
                    <span x-show="open">Fechar</span>        
                    <span x-show="!open">Abrir</span>        
                @endisset
            </div>
        </x-slot>
        <div class="pb-6">
            {{ $slot }}
        </div>
    </x-collapse>
</x-footer>