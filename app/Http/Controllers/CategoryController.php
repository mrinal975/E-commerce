<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use DB;

class CategoryController extends Controller
{
    public function createCategory(){
    return view('admin.category.createCategory');
    }
    public function storeCategory(Request $request){


        $this->validate($request,[
           'categoryName'=>'required',
           'categoryDescriptoin'=>'required',
        ]);

        //Elequent ORM
        $Category=new Category();
        $Category->categoryName=$request->categoryName;
        $Category->categoryDescriptoin=$request->categoryDescriptoin;
        $Category->publication_status=$request->publication_status;
        $Category->save();

//        $data=$request->all();
//        Category::created($data);
//        return "Category created successfully";
                //Elequent ORM
//        Category::created($request->all());
//        return "Category created successfully";


                //Query Buileder
//        DB::table('categories')->insert([
//            'categoryName'=>$request->categoryName,
//            'categoryDescriptoin'=>$request->categoryDescriptoin,
//            'publication_status'=>$request->publication_status,
//        ]);


        return redirect('category/add')->with('message','Category inserted succfully');
    }

    public function manageCategory(){
        $category= Category::all();
        return view('admin.category.manageCategory',['category'=>$category]);
    }

    public function editCategory($id){
        $categoryById=Category::where('id',$id)->first();
        return view('admin.category.editCategory',['categoryById'=>$categoryById]);
    }
    public function updateCategory(Request $request){

        $category=Category::findOrFail($request->categoryId)->first();
        $category->categoryName=$request->categoryName;
        $category->categoryDescriptoin=$request->categoryDescriptoin;
        $category->publication_status=$request->publication_status;
        $category->save();

    return redirect('category/manage')->with('message','Category info updated successfully');

    }

    public function deleteCategory($id){
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect('category/manage')->with('message','Category deleted successfuly');
    }
}
