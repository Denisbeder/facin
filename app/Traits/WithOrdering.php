<?php

namespace App\Traits;

use Illuminate\Contracts\Database\Query\Builder;

trait WithOrdering
{
    public array $orders = [];

    public array $defaultOrder = ['id' => 'desc'];

    public function queryStringWithOrdering(): array
    {
        return [
            'orders' => [
                'except' => $this->defaultOrder
            ]
        ];
    }

    public function renderingWithOrdering(): void
    {
        $orders = array_filter($this->orders, static fn ($value) => !empty($value) && in_array($value, ['asc', 'desc']));

        $this->orders = $orders;
    }

    public function clearOrders(): void
    {
        $this->orders = [];
    }

    public function orderBy(string $field): void
    {
        if (!isset($this->orders[$field])) {
            $this->orders[$field] = 'asc';
            return;
        }

        if ($this->orders[$field] === 'asc') {
            $this->orders[$field] = 'desc';
            return;
        }

        unset($this->orders[$field]);
    }

    public function applyDefaultOrdering(Builder $query): Builder
    {
        $field = array_key_first($this->defaultOrder);
        $direction = $this->defaultOrder[$field];

        return $query->orderBy($field, $direction);
    }

    public function applyOrdering(Builder $query): Builder
    {
        if (empty($this->orders)) {
            return $this->applyDefaultOrdering($query);
        }

        foreach ($this->orders as $field => $direction) {
            $query->orderBy($field, $direction);
        }

        return $query;
    }
}
