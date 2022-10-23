<?php

use Illuminate\Support\HtmlString;

if (!function_exists('array_to_attributes')) {
    function array_to_attributes(array $items)
    {
        array_walk($items, function (&$item, $key) {
            $item = $key . '="' . htmlspecialchars($item) . '"';
        });
        return new HtmlString(implode(' ', $items));
    }
}

if (!function_exists('array_every')) {
    function array_every(array $array, callable $fn)
    {
        return (bool)array_product(array_map($fn, $array));
    }
}

