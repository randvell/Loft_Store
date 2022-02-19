<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()->orderBy('id', 'DESC')->get();
        $products = Product::query()->orderBy('created_at', 'DESC')->get();
        $randomProduct = Product::getRandomProduct();

        return view('home', ['categories' => $categories, 'products' => $products, 'random_product' => $randomProduct]);
    }
}
