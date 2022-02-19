<?php /** @var \App\Models\Product $product */ ?>

@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">{{ $product->name }} в разделе {{ $product->category->name }}</div>
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
            <div class="product-container">
                <div class="product-container__image-wrap"><img src="/public/img/cover/{{ $product->image }}" class="image-wrap__image-product"></div>
                <div class="product-container__content-text">
                    <div class="product-container__content-text__title">{{ $product->name }}</div>
                    <div class="product-container__content-text__price">
                        <div class="product-container__content-text__price__value">
                            Цена: <b>{{ $product->price }}</b>
                            руб
                        </div><a href="#" class="btn btn-blue">Купить</a>
                    </div>
                    <div class="product-container__content-text__description">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content.bottom')
    <div class="line"></div>
    <div class="content-head__container">
        <div class="content-head__title-wrap">
            <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
        </div>
    </div>
    <div class="content-main__container">
        <div class="products-columns">
            @foreach($product->category->getProducts() as $product)
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="{{ route('product', $product) }}" class="products-columns__item__title-product__link">{{ $product->name }}</a></div>
                    <div class="products-columns__item__thumbnail"><a href="{{ route('product', $product) }}" class="products-columns__item__thumbnail__link"><img src="/public/img/cover/{{ $product->image }}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">{{ $product->price }} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
