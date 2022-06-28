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
