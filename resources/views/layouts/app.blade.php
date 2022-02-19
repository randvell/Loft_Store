<!DOCTYPE html>
<html lang="ru">
<head>
    <title>main - ГеймсМаркет</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/public/css/libs.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/media.css">
</head>
<body>
<div class="main-wrapper">
    @include('layouts.header')
    <div class="middle">
        <div class="sidebar">
            @include('layouts.sidebar.categories')
            @include('layouts.sidebar.news')
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры недорого без регистрации смс с торента, получить компакт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="/public/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            @yield('content')
            <div class="content-bottom"></div>
        </div>
    </div>
</div>
@include('layouts.footer')
<script src="/public/js/main.js"></script>
</body>
</html>
