<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(20);

        $products->each(function($item, $key) {

            $item->quantityOrdered = $item->orders->sum('pivot.quantityOrdered');

        });

        return view('products.index', ['products' => $products]);

    }
}
