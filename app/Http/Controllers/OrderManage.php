<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
 class OrderManage extends Controller
{
    public function viewnewOrder(){
        //$newOrder=Order::all();
        $newOrder=DB::table('orders')
            ->join('shippings','orders.shippinhId','=','shippings.id')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
            ->where('orderStatus','pending')
            ->get();
        //return $newOrder;
        return view('admin.order.newOrder',['newOrder'=>$newOrder]);
    }
    public function deliveringOrder($id){
        $deliver=Order::find($id);
        $deliver->orderStatus='delivered';
        $deliver->update();
        //return 0;
        return redirect('/new/order')->with('message',' Order Delivered Successfully');;
    }
    public function devilered(){
        $delivered=DB::table('orders')
            ->join('shippings','orders.shippinhId','=','shippings.id')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
            ->where('orderStatus','delivered')
            ->get();
        return view('admin.order.deliveredOrder',['delivered'=>$delivered]);
    }

    public function deleteorder($id){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        //return 0;
        return redirect('/delivered/order')->with('message','Order Deleted  Successfully');;
    }
    public function viewproductinformation($id){
        $ordeerdetail=Order::find($id);
        //return $ordeerdetail;
        return view('admin.order.info',compact('ordeerdetail'));
    }
    public function cancelorder($id){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        return redirect('/new/order')->with('message','Order Canceled Successfully');
    }

}
