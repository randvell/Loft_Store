<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
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
        /** @var Product $product */
        $product = Product::query()
            ->with('category')
            ->find($id);

        return view('product', ['product' => $product, 'products' => $product->category->getProducts(3)]);
    }
}
