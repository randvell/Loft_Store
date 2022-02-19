<?php /** @var \App\Models\Product $product */ ?>
<?php /** @var \App\Models\Category $currentCategory */ ?>

@extends('layouts.app')

@section('content')
<div class="content-middle">
    <div class="content-head__container">
        <div class="content-head__title-wrap">
            @if (isset($currentCategory))
                <div class="content-head__title-wrap__title bcg-title">Игры в разделе {{ $currentCategory->name }}</div>
            @else
                <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
            @endif
        </div>
        <div class="content-head__search-block">
            <div class="search-container">
                <form class="search-container__form">
                    <input type="text" class="search-container__form__input">
                    <button class="search-container__form__btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="content-main__container">
        <div class="products-columns">
            @foreach($products as $product)
            <div class="products-columns__item">
                <div class="products-columns__item__title-product"><a href="{{ route('product', $product) }}" class="products-columns__item__title-product__link">{{ $product->name }}</a></div>
                <div class="products-columns__item__thumbnail"><a href="{{ route('product', $product) }}" class="products-columns__item__thumbnail__link"><img src="/public/img/cover/{{ $product->image }}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                <div class="products-columns__item__description"><span class="products-price">{{ $product->price }} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="content-footer__container">
        {{ $products->links() }}
    </div>
@endsection
