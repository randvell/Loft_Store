<?php /** @var \App\Models\Product $randomProduct */ ?>

<footer class="footer">
    <div class="footer__footer-content">
        <div class="random-product-container">
            @if (isset($randomProduct))
            <div class="random-product-container__head">Случайный товар</div>
            <div class="random-product-container__content">
                <div class="item-product">
                    <div class="item-product__title-product"><a href="{{ route('product', $randomProduct->id) }}" class="item-product__title-product__link">{{$randomProduct->name}}</a></div>
                    <div class="item-product__thumbnail"><a href="{{ route('product', $randomProduct->id) }}" class="item-product__thumbnail__link"><img src="/public/img/cover/{{ $randomProduct->image }}" alt="Preview-image" class="item-product__thumbnail__link__img"></a></div>
                    <div class="item-product__description">
                        <div class="item-product__description__products-price"><span class="products-price">{{ $randomProduct->price }} руб</span></div>
                        <div class="item-product__description__btn-block"><a href="#" class="btn btn-blue btn-buy" data-id="{{ $randomProduct->id }}">Купить</a></div>
                    </div>
                </div>
            </div>
            @endisset
        </div>
        <div class="footer__footer-content__main-content">
            <p>
                Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                коды продления и многое другое. Также здесь всегда можно узнать последние новости
                из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                что немаловажно, выгодно!
            </p>
        </div>
    </div>
    <div class="footer__social-block">
        <ul class="social-block__list bcg-social">
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-facebook"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-twitter"></i></a></li>
            <li class="social-block__list__item"><a href="#" class="social-block__list__item__link"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</footer>
