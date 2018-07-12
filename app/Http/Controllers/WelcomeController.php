<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class WelcomeController extends Controller
{
    public function index(){
        $publishedProducts=Product::where('publication_status',1)->get();
        $publishedCategory=Category::all();
        return view('frontEnd.home.homeContent',['publishedProducts'=>$publishedProducts,'publishedCategory'=>$publishedCategory]);
    }
    public function cateory($id){
        $publishedCategory=Category::all();
        $publishedCategoryProducts=Product::where('categoryId',$id)
            ->where('publication_status',1)->get();
        return view('frontEnd.category.categoryContent',['publishedCategoryProducts'=>$publishedCategoryProducts,'publishedCategory'=>$publishedCategory]);
    }
    public function contact(){
        return view('frontEnd.contact.contactContent');
    }
    public function productDetails($id){
        $publishedCategory=Category::all();
        $productById=Product::where('id',$id)->first();
        //return $productById->productImage;
        return view('frontEnd.product.productContent',['productById'=>$productById,'publishedCategory'=>$publishedCategory]);

    }


}
