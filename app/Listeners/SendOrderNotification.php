<?php

namespace App\Listeners;

use App\Events\NewOrderCreated;
use App\Mail\OrderCreated;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderNotification
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewOrderCreated  $event
     * @return void
     */
    public function handle(NewOrderCreated $event)
    {
        Mail::to('nikitoizo@mail.ru')->send(new OrderCreated($event->getOrder()));
    }
}
