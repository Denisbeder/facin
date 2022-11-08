<?php

namespace App\Traits;

use Illuminate\Contracts\Database\Query\Builder;

trait WithOrdering
{
    public array $order = [];

    public array $defaultOrder = ['id' => 'desc'];

    public function queryStringWithOrdering(): array
    {
        return [
            'order' => [
                'except' => $this->defaultOrder
            ]
        ];
    }

    public function renderingWithOrdering(): void
    {
        $order = array_filter($this->order, static fn ($value) => !empty($value) && in_array($value, ['asc', 'desc']));

        $this->order = $order;
    }

    public function clearOrder(): void
    {
        $this->order = [];
    }

    public function orderBy(string $field): void
    {
        if (!isset($this->order[$field])) {
            $this->order[$field] = 'asc';
            return;
        }

        if ($this->order[$field] === 'asc') {
            $this->order[$field] = 'desc';
            return;
        }

        unset($this->order[$field]);
    }

    public function applyDefaultOrdering(Builder $query): Builder
    {
        $field = array_key_first($this->defaultOrder);
        $direction = $this->defaultOrder[$field];

        return $query->orderBy($field, $direction);
    }

    public function applyOrdering(Builder $query): Builder
    {
        if (empty($this->order)) {
            return $this->applyDefaultOrdering($query);
        }

        foreach ($this->order as $field => $direction) {
            $query->orderBy($field, $direction);
        }

        return $query;
    }
}
