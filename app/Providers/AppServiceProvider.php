<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.sidebar.categories', function (\Illuminate\View\View $view) {
            return $view
                ->with('categories', Category::all());
        });

        View::composer('*', function (\Illuminate\View\View $view) {
            return $view
                ->with('randomProduct', Product::getRandomProduct());
        });
    }
}
