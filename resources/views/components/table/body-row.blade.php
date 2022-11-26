@props(['selected' => false])

<tr {{ $attributes->class(['text-gray-500', 'bg-gray-50' => $selected]) }}>
    {{ $slot }}
</tr>
