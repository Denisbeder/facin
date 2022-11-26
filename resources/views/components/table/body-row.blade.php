@props(['selected' => false])

<tr @class(['bg-gray-50' => $selected])>
    {{ $slot }}
</tr>
