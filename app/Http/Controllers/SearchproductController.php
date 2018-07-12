<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use DB;
class SearchproductController extends Controller
{
    public function index(Request $request){
        $searchfield=$request->search;
        $categoryId=$request->categoryId;
        $publishedProducts=Product::where('productName','like','%'.$searchfield.'%')
            ->where('categoryId','like','%'.$categoryId.'%')
            ->get();
        $publishedCategory=Category::all();
        return view('frontEnd.home.homeContent',['publishedProducts'=>$publishedProducts,'publishedCategory'=>$publishedCategory]);
    }
}
