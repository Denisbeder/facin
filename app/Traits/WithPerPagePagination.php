<?php

namespace App\Traits;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    public int $perPage = 15;

    public array $debugs = [];

    public function initializeWithPerPagePagination(): void
    {
        $this->perPage = session()->get('perPage', $this->perPage);
    }

    public function updatedPerPage($value): void
    {
        session()->put('perPage', $value);

        $this->gotoPage(1);
    }

    public function applyPagination(Builder $query): LengthAwarePaginator
    {
        return $query->paginate($this->perPage);
    }
}
