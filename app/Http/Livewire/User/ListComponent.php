<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

class ListComponent extends Component
{
    use WithPagination;

    public int $perPage = 15;

    public bool $selectAll = false;

    public array $selected = [];

    private LengthAwarePaginator $users;

    public function boot(): void
    {
        $this->users = $this->users();
    }

    public function updatedPerPage($value): void
    {
        $this->resetPage();
        $this->selected = [];
        $this->selectAll = false;
    }

    public function updatedSelected($value): void
    {
        if (count($this->selected) === $this->users->count()) {
            $this->selectAll = true;

            return;
        }

        $this->selectAll = false;
    }

    public function updatedSelectAll($value): void
    {
        if ($value) {
            $this->selected = $this->users->getCollection()->pluck('id')->toArray();

            return;
        }

        $this->selected = [];
    }

    private function users(): LengthAwarePaginator
    {
        return User::query()->paginate($this->perPage);
    }

    public function render(): View
    {
        return view('livewire.user.list-component', [
            'users' => $this->users
        ]);
    }
}
