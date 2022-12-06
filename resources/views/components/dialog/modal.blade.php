<x-dialog>
    @isset($title)
        <x-slot:title>{{ $title }}</x-slot:title>
    @endisset

    {{ $slot }}
</x-dialog>
