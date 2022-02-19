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
     * @param int $id
     *
     * @return View
     */
    public function show(int $id)
    {
        /** @var Category $category */
        $products = Product::query()
            ->where('category_id', '=', $id)
            ->paginate(6);

        return view('home', [
            'products' => $products,
            'categories' => Category::all(),
            'currentCategory' => Category::find($id)
        ]);
    }
}
