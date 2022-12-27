@props(['selected' => false])

<th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
    <x-input.checkbox :selected="$selected" class="absolute left-4 top-1/2 -mt-2" />
</th>
