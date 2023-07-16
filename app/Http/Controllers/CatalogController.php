<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\SorterFactory;
use App\Sorters\PriceSorter;
use App\Sorters\SalesPerViewSorter;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Alabaster Table',
                'price' => 12.99,
                'created' => '2019-01-04',
                'sales_count' => 32,
                'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table',
                'price' => 44.49,
                'created' => '2012-01-04',
                'sales_count' => 301,
                'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table',
                'price' => 10.00,
                'created' => '2014-05-28',
                'sales_count' => 1048,
                'views_count' => 20123,
            ],
        ];

        $priceSorter = new PriceSorter();
        $salesPerViewSorter = new SalesPerViewSorter();

        $catalogByPrice = new Catalog($products, $priceSorter);
        $catalogBySalesPerView = new Catalog($products, $salesPerViewSorter);

        $productsSortedByPrice = $catalogByPrice->getProducts();
        $productsSortedBySalesPerView = $catalogBySalesPerView->getProducts();

        return view('catalog', compact('productsSortedByPrice', 'productsSortedBySalesPerView'));
    }

}
