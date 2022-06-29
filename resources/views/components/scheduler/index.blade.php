@props([
    'startLabel',
    'startNameField',
    'endLabel',
    'endNameField',
])

<div x-data="Scheduler('{{ $startNameField }}', '{{ $endNameField }}')">
    <div class="form-control">
        <label class="label" for="{{ $startNameField }}[date]">
            <span class="label-text">{{ $startLabel ?? 'Data e hora do início' }}</span>
        </label>
        <x-datetime nameField="{{ $startNameField }}" updateDateTimeMinTo="[name='{{ $endNameField }}[date]']"  />
    </div>
    <div x-data="{ expanded: false }" class="transition-all duration-300" x-bind:class="expanded && 'p-2 border rounded-md mt-1 bg-base-200/20'">
        <button x-on:click="expanded = !expanded" class="text-sm font-medium">Programar expiração</button>
        <div x-show="expanded" x-collapse>
            <label class="label mt-4" for="{{ $endNameField }}[date]">
                <span class="label-text">{{ $endLabel ?? 'Data e hora do encerramento' }}</span>
            </label>
            <x-datetime nameField="{{ $endNameField }}" updateDateTimeMaxTo="[name='{{ $startNameField }}[date]']" />
        </div>
    </div>
</div>