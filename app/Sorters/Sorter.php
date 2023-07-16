<?php

namespace App\Sorters;

interface Sorter
{
    public function sort(array $products): array;
}
