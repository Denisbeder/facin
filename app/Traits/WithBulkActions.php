<?php /** @noinspection TypeUnsafeArraySearchInspection */

namespace App\Traits;

use Illuminate\Contracts\Database\Query\Builder;

trait WithBulkActions
{
    public bool $selectAll = false;

    public array $selectAllExcept = [];

    public array $selectedPages = [];

    public array $selectedKeys = [];

    // Initializes

    public function renderedWithBulkActions(): void
    {
        $this->applySelectAll();
        $this->applySelectedCurrentPage();
    }

    // Properties

    public function updatingSelectedPages(): void
    {
        if (!in_array($this->page, $this->selectedPages)) {
            $this->selectCurrentPageKeys();
            $this->selectAllExcept = $this->removeItems($this->selectAllExcept, $this->getCurrentPageKeys());
            return;
        }

        $this->unselectCurrentPageKeys();

        $this->selectAllExcept = $this->addItems($this->selectAllExcept, $this->getCurrentPageKeys());
    }

    public function updatingSelectedKeys($value): void
    {
        $this->addSelectAllExceptKeys($value);
    }

    public function updatedSelectedKeys($value): void
    {
        $this->removeSelectAllExceptKeys($value);
    }

    // Actions

    public function applySelectedCurrentPage(): void
    {
        if (count($this->getCurrentPageKeys()) > 0 && array_every($this->getCurrentPageKeys(), fn ($key) => in_array($key, $this->selectedKeys))) {
            $this->forceSelectCurrentPage();
            return;
        }

        $this->forceUnselectCurrentPage();
    }

    public function forceSelectCurrentPage(): void
    {
        $this->selectedPages = $this->addItems($this->selectedPages, $this->page);
    }

    public function forceUnselectCurrentPage(): void
    {
        $this->selectedPages = $this->removeItems($this->selectedPages, $this->page);
    }

    public function selectCurrentPageKeys(): void
    {
        $this->selectedKeys = $this->addItems($this->selectedKeys, $this->getCurrentPageKeys());
    }

    public function unselectCurrentPageKeys(): void
    {
        $this->selectedKeys = $this->removeItems($this->selectedKeys, $this->getCurrentPageKeys());
    }

    public function addSelectAllExceptKeys(array $updatingSelectedKeys): void
    {
        if ($this->selectAll) {
            $diff = array_diff($this->selectedKeys, $updatingSelectedKeys);
            $this->selectAllExcept = $this->addItems($this->selectAllExcept, $diff);
        }
    }

    public function removeSelectAllExceptKeys(array $updatedSelectedKeys): void
    {
        if ($this->selectAll) {
            $intersect = array_intersect($this->selectAllExcept, $updatedSelectedKeys);
            $this->selectAllExcept = $this->removeItems($this->selectAllExcept, $intersect);
        }
    }

    public function selectAll(): void
    {
        $this->selectAll = true;
        $this->selectedPages = $this->addItems($this->selectedPages, range(1, $this->data->lastPage()));
        $this->selectAllExcept = [];
    }

    public function unselectAll(): void
    {
        $this->clearAllSelected();
    }

    public function clearAllSelected(): void
    {
        $this->selectAll = false;
        $this->selectedPages = [];
        $this->selectedKeys = [];
        $this->selectAllExcept = [];
    }

    public function applySelectAll(): void
    {
        if ($this->selectAll) {
            $keys = $this->removeItems($this->getCurrentPageKeys(), $this->selectAllExcept);
            $this->selectedKeys = $keys;
        }
    }

    // Utils

    private function addItems(array $source, array|string|int $items): array
    {
        $items = !is_array($items) ? [$items] : $items;

        $unique = array_unique([
            ...$source,
            ...$items
        ], SORT_STRING);

        return $this->ensureConvertKeysToStrings([...$unique]);
    }

    private function removeItems(array $source, array|string|int $items): array
    {
        $items = !is_array($items) ? [$items] : $items;
        $filter = array_filter($source, static fn ($value) => !in_array($value, $items));

        return $this->ensureConvertKeysToStrings([...$filter]);
    }

    private function ensureConvertKeysToStrings(array $array): array
    {
        return array_map(fn ($value) => (string)$value, $array);
    }

    private function getCurrentPageKeys(): array
    {
        return $this
            ->data
            ->pluck('id')
            ->toArray();
    }
}
