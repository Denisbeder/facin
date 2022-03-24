@props(['label'])

<x-card.footer class="p-0 mt-4 bg-slate-50/10">
    <x-collapse class="relative rounded-b-md">
        <x-slot name="trigger">
            <div class="mr-1 cursor-pointer font-bold absolute top-0 left-1/2 -translate-y-full -translate-x-1/2 justify-center bg-white text-slate-400 hover:text-slate-500 transition-colors duration-300 text-xs py-1 px-3 rounded-full border"> 
                @isset($label)
                    {{ $label }}
                @else
                    <span x-show="open">Fechar</span>        
                    <span x-show="!open">Abrir</span>        
                @endisset
            </div>
        </x-slot>
        <div class="pt-3">
            {{ $slot }}
        </div>
    </x-collapse>
</x-footer>