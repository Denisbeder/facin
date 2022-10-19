<?php

namespace App\Traits;

trait WithBulkActions
{
    public bool $selectPage = false;

    public bool $selectAll = false;

    public array $selected = [];

    public function renderingWithBulkActions(): void
    {
        $this->applySelectAll();
    }

    public function updatedSelectPage($value): void
    {
        if ($value) {
            $this->selectPageData();
            return;
        }

        $this->selected = [];
        $this->selectAll = false;
    }

    public function updatedSelected(): void
    {
        $this->selectPage = false;
        $this->selectAll = false;
    }

    public function selectPageData(): void
    {
        $this->selected = $this->data->pluck('id')->toArray();
    }

    public function selectAll(): void
    {
        $this->selectAll = true;
    }

    public function applySelectAll(): void
    {
        if ($this->selectAll) {
            $this->selectPageData();
        }
    }
}
