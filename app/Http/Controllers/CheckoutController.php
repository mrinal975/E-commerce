<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Shipping;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Cart;
use App\Category;
use Stripe\Stripe;
Use Stripe\Charge;
use Auth;

class CheckoutController extends controller
{

    public function index(){
        if(Auth::check()){
            return redirect('/checkout/shipping');
        }

        $publishedCategory=Category::all();
        return view('frontEnd.checkout.checkoutContent',['publishedCategory'=>$publishedCategory]);
    }
    public function customerRegistration(Request $request){
        $this->registervalidate($request);

        $customer=new Customer();
        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);
        $customer->address=$request->address;
        $customer->phonenumber=$request->phonenumber;
        $customer->districtname=$request->districtname;
        $customer->save();
        $customerid=$customer->id;

        Session::put('customerid',$customerid);
         return redirect('checkout/shipping');
    }

    public function registervalidate(Request $request){
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'address'=>'required',
            'phonenumber'=>'required',
            'districtname'=>'required',
        ]);
    }

    public function customerlogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){

            Session::put('customerid',Auth::user()->id);
            return redirect('checkout/shipping');
        }

        return $request;
    }

    public function showShippingForm(){

        $customerid=Session::get('customerid');
        $customerById=Customer::where('id',$customerid)->first();
        $publishedCategory=Category::all();
        return view('frontEnd.checkout.shippingContent',['customerById'=>$customerById,'publishedCategory'=>$publishedCategory]);
    }

    public function saveShipingInfo(Request $request){
        $shipping=new Shipping();
        $shipping->fulname=$request->fulname;
        $shipping->email=$request->email;
        $shipping->address=$request->address;
        $shipping->phonenumber=$request->phonenumber;
        $shipping->districtname=$request->districtname;
        $shipping->save();
        $shippingid=$shipping->id;
        Session::put('shippingid',$shippingid);
        return redirect('/checkout/payment');
    }

    public function showPaymentForm(){
        $publishedCategory=Category::all();
        return view('frontEnd.checkout.paymentContent',['publishedCategory'=>$publishedCategory]);
    }
    public function saveOrderInfo(Request $request){
        $paymentType=$request->paymentType;
        if($paymentType=='cashOnDelivery'){

            $order=new Order();
            $order->customerId=Session::get('customerid');
            $order->shippinhId=Session::get('shippingid');
            $order->orderTotal=Session::get('orderTotal');
            $order->save();

            $orderId=$order->id;
            Session::put('orderId',$orderId);

            $payment=new Payment();
            $payment->orderId=Session::get('orderId');
            $payment->paymentType=$request->paymentType;
            $payment->save();

            $orderDetail=new OrderDetail();
            $cartProducts=Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail->orderId=Session::get('orderId');
                $orderDetail->productId=$cartProduct->id;
                $orderDetail->productName=$cartProduct->name;
                $orderDetail->productPrice=$cartProduct->price;
                $orderDetail->productQuantity=$cartProduct->qty;
                $orderDetail->save();

            }
            Cart::destroy();
            return redirect('/checkout/my-home');
        }else if($paymentType=='bkash'){
            return "Under construction bakash payment.Please use cash on delivery";
        }else if($paymentType='paypal'){
            return "Under construction paypal payment.Please use cash on delivery";
        }
    }
    public function customerHome(){
        $publishedCategory=Category::all();
        return view('frontEnd.customer.customerHome',['publishedCategory'=>$publishedCategory]);
    }

//    public function postCheckout(Request $request){
//        Stripe::setApiKey("sk_test_zpQpZFI9Hg6AjgybnI6nkV8l");
//
//        try{
//            \Stripe\Charge::create(array(
//                "amount" => 2000,
//                "currency" => "usd",
//                "source" =>$request->input('stripeToken'), // obtained with Stripe.js
//                "description" => "Test Charge"
//            ));
//        }
//        catch (\Exception $e){
//            return error;
//        }
//    }


    public function starlike(Request $request){
        $data=$request->all();
        return response()->json($data);
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
