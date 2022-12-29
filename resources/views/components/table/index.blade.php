<div class="-mx-4 overflow-hidden ring-1 ring-gray-200 sm:-mx-6 md:mx-0 md:rounded-md overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 bg-white">
            <tr>
                <td colspan="100%" class="bg-gray-50 px-3 py-3 text-sm text-gray-900">
                    Você selecionou <strong>3</strong> registros. Deseja selecionar todos os <strong>97</strong> registros?
                    <x-button color="secondary" size="xs">Selecionar todos</x-button>
                </td>
            </tr>
            {{ $body }}
        </tbody>
    </table>
</div>
