<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.product.list', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        if ($request->method() === 'GET') {
            $fields = (new Product())->getFillable();
            return view('admin.product.create', ['fields' => $fields]);
        }

        $product = new Product();
        foreach($product->getFillable() as $field) {
            $product->setAttribute($field, $request->post($field));
        }
        $product->save();

        return redirect(route('admin.product.list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Product $product)
    {
        foreach($product->getFillable() as $field) {
            $product->setAttribute($field, $request->post($field));
        }
        $product->save();

        return redirect(route('admin.product.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     */
    public function destroy(Product $product)
    {
        $product->delete();
        redirect(route('admin.product.list'));
    }
}
