<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DialogDeleteComponent extends Component
{
    public bool $show = false;

    public bool $waitingResponse = false;

    public array $payload;

    protected $listeners = [
        'openDialogDelete' => 'openDialog',
        'closeDialogDelete' => 'closeDialog'
    ];

    public function openDialog(string $payload): void
    {
        $this->show = true;

        $this->payload = $this->preparePayload($payload);
    }

    public function closeDialog(): void
    {
        $this->waitingResponse = false;
        $this->show = false;
    }

    private function preparePayload(string $payload)
    {
        [$component, $event, $args]  = explode(':', $payload);

        return [
            'component' => $component,
            'event' => $event,
            'args' => is_numeric($args) ? (int)$args : $args,
        ];
    }

    public function ok(): void
    {
        $this->waitingResponse = true;

        $this->emitTo($this->payload['component'], $this->payload['event'], $this->payload['args']);
    }

    public function render()
    {
        return view('livewire.dialog-delete-component');
    }
}
