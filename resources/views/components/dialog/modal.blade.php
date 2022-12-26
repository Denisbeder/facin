<x-dialog {{ $attributes }}>
    @isset($title)
        <x-slot:title class="mb-6">{{ $title }}</x-slot:title>
    @endisset

    {{ $slot }}
</x-dialog>
