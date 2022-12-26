<x-dialog {{ $attributes }}>
    @isset($title)
    <x-slot:title class="mb-2">{{ $title }}</x-slot:title>
    @endisset

    <x-slot:icon class="bg-red-100">
        <x-icon.exclamation-triangle class="h-6 w-6 text-red-600" />
    </x-slot:icon>

    <p class="text-sm text-gray-500">
        {{ $slot }}
    </p>

    <x-slot:buttons>
        <x-button href="#" color="danger">
            Ok
        </x-button>
        <x-button color="white" x-on:click="$dialog.close()">
            Cancelar
        </x-button>
    </x-slot:buttons>
</x-dialog>
