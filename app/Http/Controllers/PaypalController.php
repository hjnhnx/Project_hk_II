<?php

namespace App\Http\Controllers;

use App\Enums\CheckoutStatus;
use App\Jobs\SendMail_Create_order;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_option;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalController extends Controller
{
    public function create_payment(Request $request)
    {
        $order = Order::find($request->id);
        $order_details = Order_Detail::query()->where('order_id',$request->id)->get();

        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                'AeV46m1wxi1RMo6Q_0oKFH-cp7Q0LeC8jMRqkwIlRhmT9YuttwiC2a0b2Y5LEzUuq32AMUNmLV70GoyU',
                'EEgxHvk1t1juloCClVnOe_Z_1eM6k0Yw_Pmp1orPrxxB0EQvnXe_rqF4Plzovu_nzap5dBX4k-KcXugj'
            )
        );

        $apiContext->setConfig([
            'mode' => 'sandbox'
        ]);

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");
        $itemArray = [];
        $tol_tal = 0;
        foreach ($order_details as $order_detail) {
            $product_option = Product_option::find($order_detail->product_option_id);
            $item = new Item();
            $item->setName(Product::find($product_option->product_id)->name.' ('.$product_option->ram.'/'.$product_option->rom.' GB )')
                ->setCurrency('USD')
                ->setQuantity($order_detail->quantity)
                ->setSku($order_detail->product_option_id)
                ->setPrice($order_detail->unit_price/23000);
            $tol_tal += $order_detail->unit_price/23000*$order_detail->quantity;
            array_push($itemArray, $item);
        }

        $itemList = new ItemList();
        $itemList->setItems($itemArray);

        $details = new Details();
        $details->setShipping(0)->setTax(0)->setSubtotal($tol_tal);
        $amount = new Amount();
        $amount->setCurrency("USD")->setTotal($tol_tal)->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)->setDescription('Thanh toan cho shop SunMobile')->setInvoiceNumber($order->id);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl('http://localhost:8000/paypal/success')
            ->setCancelUrl('http://localhost:8000/paypal/cancel');


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($apiContext);
        } catch
        (Exception $ex) {
            exit(1);
        }
        return $payment;
    }

    public function execute_payment(Request $request)
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                'AeV46m1wxi1RMo6Q_0oKFH-cp7Q0LeC8jMRqkwIlRhmT9YuttwiC2a0b2Y5LEzUuq32AMUNmLV70GoyU',
                'EEgxHvk1t1juloCClVnOe_Z_1eM6k0Yw_Pmp1orPrxxB0EQvnXe_rqF4Plzovu_nzap5dBX4k-KcXugj'
            )
        );
        $apiContext->setConfig([
            'mode' => 'sandbox'
        ]);

        $payment_id = $request->paymentID;
        $payer_id = $request->payerID;
        $payment = Payment::get($payment_id, $apiContext);


        $execution = new PaymentExecution();
        $execution->setPayerId($payer_id);
        try {
            $result = $payment->execute($execution, $apiContext);
            try {
                if (count($payment->transactions) > 0) {
                    $order_id = $payment->transactions[0]->invoice_number;
                    $order = Order::find($order_id);
                    if ($order != null) {
                        $order->is_checkout = CheckoutStatus::PAID;
                        $order->updated_at = Carbon::now();
                        $order->save();
                    }
                }
            } catch (Exception $ee) {
                exit(1);
            }
        } catch (Exception $e) {
            exit(1);
        }
        return $payment;
    }

    public function payment_success($id){
        $this->dispatch(new SendMail_Create_order($id));
        return view('client.payment_success',[
            'banner' => null,
            'sub_banner' => null,
            'code'=>Order::find($id)->order_code
        ]);
    }

}

