<?php

namespace App\Sorters;

class PriceSorter implements Sorter
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return $products;
    }
}
