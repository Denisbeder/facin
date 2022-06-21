@props(['buttonLabel', 'open' => false])

<div {{ $attributes }} x-data="{{ "{ expanded: Boolean($open)}" }}">
    <div class="flex items-center justify-center h-px z-10">
        <button 
            class="btn btn-xs btn-ghost border bg-base-100 text-base-content/50 border-base-content/5 hover:bg-base-300" 
            x-on:click="expanded = !expanded"
        >
            {{ $buttonLabel ?? 'Mais opções' }}

            <x-icon name="chevron-right" class="w-3 h-3 transition-transform duration-300 ml-1" x-bind:class="expanded && 'rotate-90'" />
        </button>
    </div>

    <x-card.footer class="pb-8">
        <x-card.body class="pb-0" x-show="expanded" x-collapse>
            {{ $slot }}
        </x-card.body>
    </x-card.footer>
</div>