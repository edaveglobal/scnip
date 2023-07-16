<?php

namespace App\Sorters;

class SalesPerViewSorter implements Sorter
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            $salesPerViewA = $a['sales_count'] / $a['views_count'];
            $salesPerViewB = $b['sales_count'] / $b['views_count'];

            return $salesPerViewA <=> $salesPerViewB;
        });

        return $products;
    }
}
