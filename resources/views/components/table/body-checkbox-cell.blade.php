@props(['selected' => false])

<td class="relative w-12 px-6 sm:w-16 sm:px-8">
    @if($selected)
    <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div>
    @endif
    <x-input.checkbox :selected="$selected" class="absolute left-4 top-1/2 -mt-2" />
</td>
