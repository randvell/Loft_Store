<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('category.list', ['categories' => Category::getList()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Category $category)
    {
        return view('category', [
            'category' => $category,
            'categories' => Category::getList(),
            'products' => $category->getProducts(),
            'random_product' => Product::getRandomProduct()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     *
     * @return Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param Category  $category
     *
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     *
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
