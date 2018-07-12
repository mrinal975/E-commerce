<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
//    public function showCart(){
//        return view('frontEnd.cart.showCart');
//    }
    public function updateTax(){
    Cart::tax();
    }
    public function addToCart(Request $request){
        //$productId=new Product();
        $id=$request->id;
        $productById=Product::findOrFail($id);

        Cart::add([
            'id'=>$id,
            'name'=>$productById->productName,
            'price'=>$productById->productPrice,
            'qty'=>1,
        ]);
        $data=Cart::count();
        return response()->json($data);

    }

    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect()->back();
    }
    public function showCart(){
        $publishedCategory=Category::all();
        $cartProduct=Cart::content();
        return view('frontEnd.cart.showCart',compact('cartProduct'),['publishedCategory'=>$publishedCategory]);
    }
    public function QuantityUpdate(Request $request,$id){
        Cart::update($id,['qty'=>$request->qty]);
        return back();
    }
}
