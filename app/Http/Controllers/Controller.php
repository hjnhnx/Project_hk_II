<?php

namespace App\Http\Controllers;

use App\Enums\BannerType;
use App\Enums\CheckoutStatus;
use App\Enums\Status;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Product_option;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $p_hot = Product::query()->where('status', Status::ACTIVE)->where('price', '<', 25000000)->orderBy('price', 'DESC')->take(6)->get();
        $p_new = Product::query()->where('status', Status::ACTIVE)->orderBy('id', 'DESC')->take(6)->get();
        $p_sale = Product::query()->where('status', Status::ACTIVE)->orderBy('discount', 'DESC')->take(6)->get();
        $p_flagship = Product::query()->where('status', Status::ACTIVE)->orderBy('price', 'DESC')->take(6)->get();
        $p_midrange = Product::query()->where('status', Status::ACTIVE)->where('price', '<', 12000000)->where('price', '>', 5000000)->orderBy('price', 'DESC')->take(6)->get();
        $p_cheap = Product::query()->where('status', Status::ACTIVE)->where('price', '<', 5000000)->orderBy('price', 'DESC')->take(6)->get();


        $banner = Banner::query()->where('type', BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type', BannerType::SUBBANNER)->take(3)->get();
        return view('client.index', [
            'p_sale' => $p_sale,
            'p_new' => $p_new,
            'p_hot' => $p_hot,
            'banner' => $banner,
            'sub_banner' => $sub_banner,
            'p_flagship' => $p_flagship,
            'p_midrange' => $p_midrange,
            'p_cheap' => $p_cheap,
        ]);
    }
    public function product_detail($slug)
    {
        $banner = Banner::query()->where('type', BannerType::BANNER)->get();
        $sub_banner = Banner::query()->where('type', BannerType::SUBBANNER)->take(3)->get();
        $product = Product::query()->where('slug', $slug)->with('product_option')->first();
        return view('client.product_detail', ['detail' => $product, 'banner' => $banner, 'sub_banner' => $sub_banner]);
    }
    public function product(Request $request)
    {
        $brand_s = $request->brand_s;
        $smart_phone = $request->smart_phone;
        $price_s = $request->price_s;
        $query_builder = Product::query();
        if ($brand_s) {
            $query_builder->orderBy('price', 'DESC')->where('status', Status::ACTIVE)->where('brand_id', Brand::query()->where('name', $brand_s)->first()->id);
        }
        if ($smart_phone) {
            $query_builder->orderBy('price', 'DESC')->where('status', Status::ACTIVE)->where('name', 'like', '%' . $smart_phone . '%');
        }
        if ($price_s && $price_s == 't->c') {
            $query_builder->orderBy('price', 'ASC')->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == 'c->t') {
            $query_builder->orderBy('price', 'DESC')->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '<2tr') {
            $query_builder->where('price', '<', 2000000)->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '2tr->5tr') {
            $query_builder->where('price', '>=', 2000000)->where('price', '<', 5000000)->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '5tr->10tr') {
            $query_builder->where('price', '>=', 5000000)->where('price', '<', 10000000)->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '10tr->15tr') {
            $query_builder->where('price', '>=', 10000000)->where('price', '<', 15000000)->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '15tr->20tr') {
            $query_builder->where('price', '>=', 15000000)->where('price', '<', 20000000)->where('status', Status::ACTIVE);
        } elseif ($price_s && $price_s == '>20tr') {
            $query_builder->where('price', '>=', 20000000)->where('status', Status::ACTIVE);
        }
        $product_new = Product::query()->orderBy('id', 'DESC')->where('status', Status::ACTIVE)->take(5)->get();
        $product_sale = Product::query()->orderBy('discount', 'DESC')->where('status', Status::ACTIVE)->take(5)->get();
        $brands = Brand::query()->where('status', Status::ACTIVE)->get();

        $products = $query_builder->orderBy('id', 'DESC')->paginate(20);

        return view('client.products', [
            'list' => $products,
            'banner' => null,
            'sub_banner' => null,
            'product_sale' => $product_sale,
            'product_new' => $product_new,
            'brands' => $brands,
            'brand_s' => $brand_s
        ]);
    }
    public function view_about_us()
    {
        return view('client.about_us', [
            'banner' => null,
            'sub_banner' => null,
        ]);
    }
    public function view_contact()
    {
        return view('client.contactus', ['banner' => null, 'sub_banner' => null,]);
    }
    public function contact(Request $request)
    {
        $contact = new Contact();
        $contact->fill($request->all());
        $contact->save();
        return back()->with('message', 'Thông tin của bạn đã gửi thành công!');
    }
    public function view_login()
    {
        if (Auth::check()) {
            return redirect()->route('user_profile');
        } else {
            return view('client.login_register', [
                'banner' => null,
                'sub_banner' => null,
            ]);
        }

    }
    public function send_mail($id)
    {
        $order = Order::find($id);
        $order_detail = Order_Detail::query()->where('order_id',$id)->get();
        $toName = $order->ship_name;
        $userEmail = $order->ship_email;
        Mail::send('send_mail', ['order'=>$order,'order_details'=>$order_detail], function ($message) use ($toName, $userEmail) {
            $message->to($userEmail, $toName)
                ->subject('Cảm ơn bạn đã mua hàng tại Sun Mobile.');
            $message->from(env('MAIL_USERNAME'), 'Sun Mobile');
        });
        return redirect()->route('home_page');
    }

    public function list_order(Request $request)
    {
        if (Auth::check()) {
            $order = Order::query()->where('user_id', Auth::id())->orderBy('id', 'DESC')->with('order_detail')->get();
            return view('client.order_detail', [
                'list' => $order,
                'banner' => null,
                'sub_banner' => null,
            ]);
        } else if ($request->ship_email && $request->ship_phone) {
            $order = Order::query()->where(['ship_email'=>$request->ship_email,'ship_phone'=>$request->ship_phone])->orderBy('id', 'DESC')->with('order_detail')->get();
            if ($order != null){
                return view('client.order_detail', [
                    'list' => $order,
                    'banner' => null,
                    'sub_banner' => null,
                ]);
            }else {
                return back()->with('error_message','Không tìm thấy đơn hàng tương ứng');
            }
        } else {
            return view('client.order_detail', [
                'list'=>null,
                'banner' => null,
                'sub_banner' => null,
            ]);
        }
    }
    public function get_data_product($id){
        $product = Product::query()->where('id',$id)->with('product_option')->first();
        $product_option = Product_option::query()->where('product_id',$id)->with('color')->get();
        return response()->json([
            'product'=>$product,
            'product_option'=>$product_option
        ]);
    }
    public function get_data_brand(Request $request){
        $order = Order::query()->where('is_checkout',CheckoutStatus::PAID)->with('order_detail')->get();
        $brands = Brand::all();
        $data_brands = [];
        foreach ($brands as $i){
            $count = 0;
            foreach (Product::query()->where('brand_id',$i->id)->get() as $item){
                $count += sizeof(Order_Detail::query()->where('product_id',$item->id)->get());
            }
            array_push($data_brands,$count);
        }
        return $data_brands;
    }


    public function payment ($id){
        $order = Order::find($id);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://sun-mobile.herokuapp.com/payment/response";
        $vnp_TmnCode = "R2D13ZQR";
        $vnp_HashSecret = "DPTXZMEMIYANCSFRSMRAXWGAFCQCFTMG";
        $vnp_TxnRef = $order->id;
        $vnp_OrderInfo = "Thanh toan don hang ";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $order->total_price * 100;
        $vnp_Locale = "vn";
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != null) {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }


    public function ipnResponse(Request $request)
    {
        Log::debug('An informational message.');
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_HashSecret = "ZGZKUWRMIPLAZFFGCMMRDRTQUKFOMGLS";
        $inputData = array();
        $returnData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        $vnp_Amount = $inputData['vnp_Amount'] / 100;
        $order = Order::find($request->vnp_TxnRef);
        $floatVar = floatval(preg_replace("/[^-0-9\.]/", "", $order->total_price));
        try {
            if ($secureHash === $vnp_SecureHash) {
                if ($order != NULL) {
                    if ($floatVar == $vnp_Amount) {
                        if ($order->payment_method != NULL && $order->payment_method == 0) {
                            if ($request->vnp_ResponseCode == '00' || $request->vnp_TransactionStatus == '00') {
                                $order->update(['payment_method' => true]);
                                $order->save();
                                $notification = new Notification();
                                $notification->sender_id = $order->user_id;
                                $notification->link = "/myorder/".$order->id;
                                $notification->message = "Đơn hàng của bạn đã được xác nhân thanh toán với giá trị: ".$order->total_price."đơn hàng sẽ được giao trong thời gian sớm nhất";
                                $notification->save();
                                $returnData['RspCode'] = '00';
                                $returnData['Message'] = 'Confirm Success';
                                return $returnData;
                            } else {
                                $Status = 2;
                            }
                        } else {
                            $returnData['RspCode'] = '02';
                            $returnData['Message'] = 'Order already confirmed';
                            return $returnData;
                        }
                    } else {
                        $returnData['RspCode'] = '04';
                        $returnData['Message'] = 'invalid amount';
                        return $returnData;
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                    return $returnData;
                }
            } else {
                $returnData['RspCode'] = '97';
                $returnData['Message'] = 'Invalid signature';
                return $returnData;
            }
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
    }

}
