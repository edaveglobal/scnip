<?php

namespace App;

use App\Sorters\Sorter;

class Catalog
{
    private $products;
    private $sorter;

    public function __construct(array $products, Sorter $sorter)
    {
        $this->products = $products;
        $this->sorter = $sorter;
    }

    public function getProducts(): array
    {
        return $this->sorter->sort($this->products);
    }
}

