<?php

namespace App\Traits;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    public int $perPage = 15;

    public ?int $lastPage;

    public array $debugs = [];

    public function initializeWithPerPagePagination(): void
    {
        $this->perPage = session()->get('perPage', $this->perPage);
    }

    public function renderedWithPerPagePagination(): void
    {
        if ($this->page > $this->lastPage) {
            $pathInfo = trim(request()?->getPathInfo(), '/');
            $url = request('fingerprint.path', $pathInfo) . '?page=' . $this->lastPage;
            redirect($url);
        }
    }

    public function updatedPerPage($value): void
    {
        session()->put('perPage', $value);
    }

    public function applyPagination(Builder $query): LengthAwarePaginator
    {
        $paginate = $query->paginate($this->perPage);

        $this->lastPage = $paginate->lastPage();

        return $paginate;
    }
}
