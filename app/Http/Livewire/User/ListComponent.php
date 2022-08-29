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

    public function updatedPerPage($value): void
    {
        $this->resetPage();
    }

    public function updatedSelected($value): void
    {
        $this->selectAll = false;

        if (count($this->selected) === $this->users()->count()) {
            $this->selectAll = true;
        }
    }

    public function updatedSelectAll($value): void
    {
        $this->selected = [];

        if ($value) {
            $this->selected = $this->users()->getCollection()->pluck('id')->toArray();
        }
    }

    public function render(): View
    {
        return view('livewire.user.list-component', [
            'users' => $this->users()
        ]);
    }

    private function users(): LengthAwarePaginator
    {
        return User::query()->paginate($this->perPage);
    }
}
