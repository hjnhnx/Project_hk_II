<?php

namespace App\Jobs;

use App\Enums\CheckoutStatus;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail_Create_order implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $order = Order::find($this->id);
        $order_detail = Order_Detail::query()->where('order_id', $this->id)->get();
        $toName = $order->ship_name;
        $userEmail = $order->ship_email;
        Mail::send('send_mail', ['order' => $order, 'order_details' => $order_detail], function ($message) use ($order,$toName, $userEmail) {
            $message->to($userEmail, $toName)
                ->subject($order->is_checkout == CheckoutStatus::PAID ? 'Cảm ơn bạn đã mua hàng tại Sun Mobile.' : 'Cảm ơn bạn đã đặt hàng tại Sun Mobile.');
            $message->from(env('MAIL_USERNAME'), 'Sun Mobile');
        });
    }
}
