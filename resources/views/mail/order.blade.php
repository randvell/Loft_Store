<?php /**  @var \App\Models\Order $order */ ?>

Пользователь {{ $order->email }} заказал следующий товары: <br>

<br>
{{ $order->product->id }} {{ $order->product->title }}
