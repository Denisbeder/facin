<section class="max-w-5xl mx-auto">
    <ul class="mb-3">
        @foreach($debugs as $k => $debug)
            <li>{{ $debug }}</li>
        @endforeach
        @php $this->debugs = []; @endphp
    </ul>

    @if($selectedKeys || $selectAll)
        <div class="mb-5">
            <div class="dropdown">
                <label tabindex="0" class="btn btn btn-ghost btn-outline btn-xs m-1">Ações em massa</label>
                <div tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <button class="btn btn-xs btn-error" wire:click="deleteSelectedKeys">Deletar selecionados</button>
                    <button class="btn btn-xs btn-ghost btn-outline mt-1">Desativar</button>
                    <button class="btn btn-xs btn-ghost btn-outline mt-1">Ativar</button>
                </div>
            </div>
        </div>
    @endif

    <div class="flex mb-5">
        <input type="search" placeholder="Buscar" class="input input-sm w-full max-w-xs" wire:model.debounce.300ms="search" />
    </div>

    <x-flex-list wire:loading.class="opacity-30 pointer-events-none select-none">
        <x-flex-list.row asHeader>
            <x-flex-list.cell class="flex-initial">
                <input
                    type="checkbox"
                    class="checkbox checkbox-xs"
                    value="{{ $page }}"
                    wire:model="selectedPages"/>
            </x-flex-list.cell>
            <x-flex-list.cell ordeable wire:click="orderBy('id')" :direction="$order['id'] ?? null"
                              class="flex-initial">#
            </x-flex-list.cell>
            <x-flex-list.cell ordeable wire:click="orderBy('name')" :direction="$order['name'] ?? null"
                              class="flex-[2]">Nome completo
            </x-flex-list.cell>
            <x-flex-list.cell ordeable wire:click="orderBy('email')" :direction="$order['email'] ?? null"
                              class="flex-[2]">E-mail
            </x-flex-list.cell>
            <x-flex-list.cell ordeable wire:click="orderBy('deactivated')" :direction="$order['deactivated'] ?? null">
                Estado
            </x-flex-list.cell>
            <x-flex-list.cell ordeable wire:click="orderBy('created_at')" :direction="$order['created_at'] ?? null"
                              class="flex-[2]">Criado em
            </x-flex-list.cell>
            <x-flex-list.cell>
                @if(!empty($this->order))
                    <button class="ml-auto p-0 flex" wire:click="clearOrder()" title="Limpar ordenação">
                        <x-icon name="menu-alt-2" class="w-4 h-4"/>
                        <x-icon name="x-circle" class="w-4 h-4 -ml-1 -mt-1"/>
                    </button>
                @endif
            </x-flex-list.cell>
        </x-flex-list.row>

        @if($selectedKeys || $selectAll)
            <x-flex-list.row class="bg-base-300">
                <x-flex-list.cell>
                    @if($selectAll && empty($selectAllExcept) || count($selectedKeys) === $users->total())
                        Você selecionou todos os <strong class="mx-1">{{ $users->total() }}</strong> registros.
                        <button class="btn btn-xs ml-2" wire:click="unselectAll">Desmarcar todos</button>
                    @else
                        Você tem
                        <strong class="mx-1">
                            {{ ($selectAll && !empty($selectAllExcept)) ? $users->total() - count($selectAllExcept) : count($selectedKeys) }}
                        </strong>
                        registros selecionados, você gostaria de selecionar todos os
                        <strong class="ml-1">{{ $users->total() }}</strong>?
                        <button class="btn btn-xs ml-2" wire:click="selectAll">Selecionar todos</button>
                        <button class="btn btn-xs ml-2" wire:click="unselectAll">Desmarcar todos</button>
                    @endunless
                </x-flex-list.cell>
            </x-flex-list.row>
        @endif

        @forelse($users as $user)
            <x-flex-list.row wire:key="{{ $user->id }}">
                <x-flex-list.cell class="flex-initial">
                    <input
                        type="checkbox"
                        class="checkbox checkbox-xs"
                        value="{{ $user->id }}"
                        wire:model="selectedKeys"/>
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-initial" header="#">
                    {{ $user->id }}
                </x-flex-list.cell>

                <x-flex-list.cell class="flex-[2]">
                    <x-avatar class="h-full w-full text-gray-300 rounded-full w-10 h-10 inline-block mr-2 border"/>
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

                <x-flex-list.cell class="flex-[2]" header="Criado em">
                    {{ $user->created_at->format('d/m/Y H:i:s') }}
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
        @empty
            <x-flex-list.cell class="w-full justify-center items-center p-14">
                <strong>Nenhum registro encontrado.</strong>
            </x-flex-list.cell>
        @endforelse

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
