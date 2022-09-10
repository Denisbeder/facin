<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * @property mixed $users
 */
class ListComponent extends Component
{
    use WithPagination;

    public int $perPage = 15;

    public bool $selectAll = false;

    public array $selected = [];

    public function updatedPage($value): void
    {
        $this->resetSelectable();
    }

    public function updatedPerPage($value): void
    {
        $this->resetPage();
        $this->resetSelectable();
    }

    public function updatedSelected($value): void
    {
        $this->selectAll = count($this->selected) === $this->users->count();
    }

    public function updatedSelectAll($value): void
    {
        $this->selected = [];

        if ($value) {
            $this->selected = $this->users
                ->getCollection()
                ->pluck('id')
                ->toArray();
        }
    }

    private function query(): Builder
    {
        return User::query();
    }

    public function getUsersProperty(): LengthAwarePaginator
    {
        return $this->query()->latest()->paginate($this->perPage);
    }

    private function resetSelectable(): void
    {
        $this->selected = [];
        $this->selectAll = false;
    }

    public function render(): View
    {
        return view('livewire.user.list-component', [
            'users' => $this->users
        ]);
    }
}
