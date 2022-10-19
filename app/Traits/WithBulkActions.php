<?php

namespace App\Traits;

trait WithBulkActions
{
    public bool $selectPage = false;

    public bool $selectAll = false;

    public bool $canSelectAll = false;

    public $selected = [];

    public function renderedWithBulkActions(): void
    {
        $this->applySelectAll();
    }

    public function updatedSelectPage($value): void
    {
        if ($value) {
            $this->selectPageData();
            $this->canSelectAll = true;
            return;
        }

        $this->selected = [];
        $this->selectAll = false;
    }

    public function updatedSelected($value): void
    {
        if ($this->data->count() === count($this->selected)) {
            $this->selectPage = true;
            return;
        }

        $this->selectPage = false;
        $this->selectAll = false;
        $this->canSelectAll = false;
    }

    public function selectPageData(): void
    {
        $this->selected = $this->data->pluck('id')->map(fn($id) => (string)$id);
    }

    public function selectAll(): void
    {
        $this->selectAll = true;
        $this->selectPage = true;
    }

    public function applySelectAll(): void
    {
        if ($this->selectAll) {
            $this->selectPageData();
        }
    }
}
