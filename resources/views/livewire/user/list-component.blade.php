<section class="max-w-5xl mx-auto">
    <ul class="mb-3">
        @foreach($debugs as $k => $debug)
            <li>{{ $debug }}</li>
            @php $this->$debug = []; @endphp
        @endforeach
    </ul>
    <x-flex-list>
        <x-flex-list.row asHeader>
            <x-flex-list.cell class="flex-initial">
                <input
                    type="checkbox"
                    class="checkbox checkbox-xs"
                    value="{{ $page }}"
                    wire:model="selectedPages" />
            </x-flex-list.cell>
            <x-flex-list.cell class="flex-initial">#</x-flex-list.cell>
            <x-flex-list.cell class="flex-[2]">Nome completo</x-flex-list.cell>
            <x-flex-list.cell class="flex-[2]">E-mail</x-flex-list.cell>
            <x-flex-list.cell>Estado</x-flex-list.cell>
            <x-flex-list.cell></x-flex-list.cell>
        </x-flex-list.row>

        @if($selectedKeys || $selectAll)
        <x-flex-list.row class="bg-base-300">
            <x-flex-list.cell>
                @if($selectAll && empty($selectAllExcept))
                    Você selecionou todos os <strong class="mx-1">{{ $users->total() }}</strong> registros.
                    <button class="btn btn-xs ml-2" wire:click="unselectAll">Desmarcar todos</button>
                @else
                    Você tem <strong class="mx-1">{{ ($selectAll && !empty($selectAllExcept)) ? $users->total() - count($selectAllExcept) : count($selectedKeys) }}</strong> registros selecionados, você gostaria de selecionar todos os <strong class="ml-1">{{ $users->total() }}</strong>?
                    <button class="btn btn-xs ml-2" wire:click="selectAll">Selecionar todos</button>
                    <button class="btn btn-xs ml-2" wire:click="unselectAll">Desmarcar todos</button>
                @endunless
            </x-flex-list.cell>
        </x-flex-list.row>
        @endif

        @foreach($users as $user)
            <x-flex-list.row wire:key="{{ $user->id }}">
                <x-flex-list.cell class="flex-initial">
                    <input
                        type="checkbox"
                        class="checkbox checkbox-xs"
                        value="{{ $user->id }}"
                        wire:model="selectedKeys" />
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-initial" header="#" >
                    {{ $user->id }}
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-[2]">
                    <x-avatar class="h-full w-full text-gray-300 rounded-full w-10 h-10 inline-block mr-2 border" />
                    <span class="font-semibold">{{ $user->name }}</span>
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-[2]" header="E-mail">
                    {{ $user->email }}
                </x-flex-list.cell>

                <x-flex-list.cell header="Estado">
                    <span class="{{ $user->deactivated->getStyles() }}">
                        {{ $user->deactivated->getName() }}
                    </span>
                </x-flex-list.cell>

                <x-flex-list.cell class="md:justify-end" header="Ações">
                    <div class="group flex">
                        <button class="btn btn-xs btn-ghost border rounded-r-none">Editar</button>
                        <div class="dropdown dropdown-end -ml-px">
                            <button tabindex="0" class="btn btn-xs btn-ghost border rounded-l-none">
                                <x-icon name="chevron-down" class="w-4 h-4"/>
                            </button>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 mt-1">
                                <li><a class="px-3 py-1">Item 1</a></li>
                                <li><a class="px-3 py-1">Item 2</a></li>
                            </ul>
                        </div>
                    </div>
                </x-flex-list.cell>
            </x-flex-list.row>
        @endforeach

    </x-flex-list>

    <div class="flex">
        <div class="flex-initial mr-4">
            <select class="select w-full max-w-xs" wire:model="perPage">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="flex-1">
            {{ $users->links() }}
        </div>
    </div>
</section>
