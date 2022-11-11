<div>
    <div @class([
        'visible' => $show,
        'modal opacity-100 pointer-events-auto'
        ])>
        <div class="modal-box">
            <h3 class="font-bold text-lg">Confirmar exclusão</h3>
            <p class="py-4">Você tem certeza que deseja fazer isso?</p>
            <div class="modal-action">
                <button {{ $waitingResponse ? 'disabled' : '' }} wire:click="$toggle('show')" class="btn btn-ghost border">Cancelar</button>
                <button {{ $waitingResponse ? 'disabled' : '' }} wire:click="ok()" class="btn btn-error">Sim, excluir</button>
            </div>
        </div>
    </div>
</div>
