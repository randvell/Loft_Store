<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $products = Product::query()
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('home', ['products' => $products]);
    }
}
