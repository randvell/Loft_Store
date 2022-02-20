@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
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
            @foreach($orders as $order)
                <div class="cart-product-list">
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img
                                src="/public/img/cover/{{ $order->product->image }}"
                                class="cart-product__item__product-photo__image">
                        </div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content"><a href="#">{{ $order->product->name }}</a></div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">{{ $order->created_at }}</div>
                        </div>
                        <div class="cart-product__item__product-price"><span
                                class="product-price__value">{{ $order->product->price }} рублей</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="content-footer__container">
                     {{ $orders->links() }}
                </div>
        </div>
    </div>
@endsection
