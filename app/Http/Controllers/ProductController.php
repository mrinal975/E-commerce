<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Http\Middleware;
use App\Manufacturer;
use Image;
use DB;
use Illuminate\Http\Request;
 class ProductController extends Controller
{
    public function createProduct(){
        $category=Category::where('publication_status',1)->get();
        $manufectures=Manufacturer::where('publicationStatus',1)->get();
        return view('admin.product.createProduct',['category'=>$category,'manufectures'=>$manufectures]);
    }
    public function storeProduct(Request $request){
        $this->validate($request,[
            'productName'=>'required',
            'productPrice'=>'required',
            'productImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $productImage=$request->file('productImage');
       //$name=time().'.'.$productImage->getClientOriginalExtension();
        $name=$productImage->getClientOriginalName();
       $uploadPath='productImage/';
        $imageUrl=$uploadPath.$name;
       //$thumImage=Image::make($productImage->getRealPath())->resize(100,100);
       $productImage->move($uploadPath,$name);

        $this->saveProductionInfo($request,$imageUrl);
        return redirect('/product/add')->with('message','Product Info Saved Successfully');
    }

    public function saveProductionInfo($request,$imageUrl){

        $product=new Product();
        $product->productName=$request->productName;
        $product->categoryId=$request->categoryId;
        $product->manufacturerId=$request->manufacturerId;
        $product->productPrice=$request->productPrice;
        $product->productQuantity=$request->productQuantity;
        $product->productShortDescriptoin=$request->productShortDescriptoin;
        $product->productLongDescriptoin=$request->productLongDescriptoin;
        $product->productImage=$imageUrl;
        $product->publication_status=$request->publication_status;
        $product->save();

    }

    public function manageProduct()
    {
//        $product=DB::table('products')->select('productName','productPrice')->get();
//        print_r($product);
//        exit();
        $products=DB::table('products')
            ->join('categories','products.categoryId','=','categories.id')
            ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
            ->select('products.id','products.productName','products.productPrice','products.productQuantity','products.publication_status','categories.categoryName','manufacturers.manufacturerName')
            ->get();

//        print_r($product);
//        exit();
        return view('admin.product.manageProduct',['products'=>$products]);

    }

    public function viewProduct($id){
        $productById=DB::table('products')
            ->join('categories','products.categoryId','=','categories.id')
            ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
            ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
            ->where('products.id',$id)
            ->first();
        //print_r($products);
        //exit();
        return view('admin.product.viewProduct',['productById'=>$productById]);
    }
    public function editProduct($id){

        $category=Category::where('publication_status',1)->get();
        $manufectures=Manufacturer::where('publicationStatus',1)->get();
        $productById=Product::where('id',$id)->first();
        return view('admin.product.editProduct',['productById'=>$productById,'category'=>$category,'manufectures'=>$manufectures]);

    }
    public function updateProduct(Request $request){
        $imageUrl=$this->imageExistStatus($request);
        $productById=Product::where('id',$request->productId)->first();
        $productById->productName=$request->productName;
        $productById->categoryId=$request->categoryId;
        $productById->manufacturerId=$request->manufacturerId;
        $productById->productPrice=$request->productPrice;
        $productById->productQuantity=$request->productQuantity;
        $productById->productShortDescriptoin=$request->productShortDescriptoin;
        $productById->productLongDescriptoin=$request->productLongDescriptoin;
        $productById->productImage=$imageUrl;
        $productById->publication_status=$request->publicationStatus;
        $productById->save();
        return redirect('product/manage')->with('message','Product Updated Successfully');
    }
    private function imageExistStatus($request){
        $productById=Product::where('id',$request->productId)->first();
        $productImage=$request->file('productImage');
        if ($productImage){
            unlink($productById->productImage);
            $name=$productImage->getClientOriginalName();
            $uploadPath='productImage/';
            $productImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$productById->productImage;
        }
        return $imageUrl;
    }
    public function deleteProduct($id){
        $productDeleteById=Product::findOrFail($id);
        unlink($productDeleteById->productImage);
        $productDeleteById->delete();
        return redirect('product/manage')->with('message','Product Deleted Successfully');
    }
//{{$productById->productImage}}
}
