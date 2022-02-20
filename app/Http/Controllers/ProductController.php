<?php

namespace App\Http\Controllers;

use App\Events\NewOrderCreated;
use App\Models\Category;
use App\Models\Order;
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

    /**
     *
     */
    public function buy(Request $request)
    {
        $id = $request->input('product_id');
        $email = $request->input('email');
        $name = $request->input('customer_name');
        if (!$id || !$email || !$name) {
            throw new \InvalidArgumentException('Переданы не все обязательные поля');
        }

        $order = new Order([
            'product_id' => $id,
            'customer_name' => $name,
            'email' => $email
        ]);

        $order->save();
        NewOrderCreated::dispatch($order);

        return redirect(route('orders'));
    }
}
