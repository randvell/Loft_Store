<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param Category $category
     *
     * @return View
     */
    public function show(Category $category)
    {
        return view('home', [
            'currentCategory' => $category,
            'products' => $category->getProducts()
        ]);
    }
}
