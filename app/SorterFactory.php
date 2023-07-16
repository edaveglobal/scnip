<?php

namespace App;

use App\Sorters\Sorter;
use App\Sorters\PriceSorter;
use App\Sorters\SalesPerViewSorter;

class SorterFactory
{
    public static function create($sorter): Sorter
    {
        switch ($sorter) {
            case 'price':
                return new PriceSorter();
            case 'sales_per_view':
                return new SalesPerViewSorter();
            default:
                throw new \InvalidArgumentException('Invalid sorter specified.');
        }
    }
}
