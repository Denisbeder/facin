<table class="min-w-full divide-y divide-gray-300">
    <thead class="bg-gray-50">
        <tr>
            {{ $head }}
        </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 bg-white">

            {{ $body }}

    </tbody>

    {{ $slot }}
</table>
