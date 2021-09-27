<?php

namespace App\Jobs;

use App\Enums\CheckoutStatus;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailUpdate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $array_order_id;

    public function __construct(array $array_order_id)
    {
        $this->array_order_id = $array_order_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->array_order_id as $item){
            $order = Order::find($item);
            $order_detail = Order_Detail::query()->where('order_id',$item)->get();
            $toName = $order->ship_name;
            $userEmail = $order->ship_email;
            Mail::send('client.mail_update', ['order'=>$order,'order_details'=>$order_detail], function ($message) use ($order,$toName, $userEmail) {
                $message->to($userEmail, $toName)
                    ->subject($order->is_checkout == CheckoutStatus::PAID ? 'Cảm ơn bạn đã mua hàng tại Sun Mobile.' : 'Cảm ơn bạn đã đặt hàng tại Sun Mobile.');
                $message->from(env('MAIL_USERNAME'), 'Sun Mobile');
            });
        }
    }
}
