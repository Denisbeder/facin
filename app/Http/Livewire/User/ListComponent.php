<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Traits\WithBulkActions;
use App\Traits\WithPerPagePagination;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

/**
 * @property mixed $dataQuery
 * @property mixed $data
 */
class ListComponent extends Component
{
    use WithPerPagePagination, WithBulkActions;

    public function getDataQueryProperty(): Builder
    {
        return User::query();
    }

    public function getDataProperty(): LengthAwarePaginator
    {
        return $this->applyPagination($this->dataQuery->latest());
    }

    public function render(): View
    {
        return view('livewire.user.list-component', [
            'users' => $this->data
        ]);
    }
}
