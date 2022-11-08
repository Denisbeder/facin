<?php

namespace App\Http\Livewire\User;

use App\Actions\UserDelete;
use App\Actions\UserDeleteAll;
use App\Models\User;
use App\Traits\WithBulkActions;
use App\Traits\WithOrdering;
use App\Traits\WithPerPagePagination;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

/**
 * @property Builder $query
 * @property LengthAwarePaginator $data
 */
class ListComponent extends Component
{
    use WithPerPagePagination, WithBulkActions, WithOrdering;

    public $search;

    public function getQueryProperty(): Builder
    {
        $query = User::query();
        $query = $this->applyFilters($query);

        return $this->applyOrdering($query);
    }

    public function getDataProperty(): LengthAwarePaginator
    {
        return $this->applyPagination($this->query);
    }

    public function applyFilters(Builder $query): Builder
    {
        return $query
            ->when($this->search, function ($query, $value) {
                return $query
                    ->where('name', 'like', "%{$value}%")
                    ->orWhere('email', 'like', "%{$value}%");
        });
    }

    public function deleteSelectedKeys(): void
    {
        if (empty($this->selectedKeys)) {
            return;
        }

        if ($this->selectAll) {
            UserDeleteAll::run($this->selectAllExcept);
        } else {
            UserDelete::run($this->selectedKeys);
        }

        $this->clearAllSelected();
    }

    public function render(): View
    {
        //sleep(3);
        return view('livewire.user.list-component', [
            'users' => $this->data
        ]);
    }
}
