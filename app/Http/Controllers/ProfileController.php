<?php

namespace App\Http\Controllers;
use Auth;
use App\Profile;
use App\Customer;
use Illuminate\Http\Request;
use DB;
use App\Category;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewProfile(){
        $publishedCategory=Category::all();
        $userId=Auth::user()->id;
        $profilepicture=Profile::where('customerId',$userId)->first();
        //return $profilepicture;
        $profiles=Customer::where('id',$userId)->first();

        return view('frontEnd.profile.viewProfile',['publishedCategory'=>$publishedCategory,'profiles'=>$profiles,'profilepicture'=>$profilepicture]);
    }
    public function editProfile(){
        $publishedCategory=Category::all();
        $userId=Auth::user()->id;
        $profiles=Customer::where('id',$userId)->first();
        $profilepicture=Profile::where('customerId',$userId)->first();
        return view('frontEnd.profile.edit',['publishedCategory'=>$publishedCategory,'profiles'=>$profiles,'profilepicture'=>$profilepicture]);
    }
    public function updateprofileInformation(Request $request){

        $userid=Auth::user()->id;
        $customer=Customer::where('id',$userid)->first();
        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->phonenumber=$request->phonenumber;
        $customer->save();

        if($request->file('image')){


            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $uploadPath='profile/';
            $imageUrl=$uploadPath.$name;
            $image->move($uploadPath,$name);
            $profile=Profile::where('customerId',$userid)->first();
            $profile->customerId=$userid;
            $profile->image=$imageUrl;
            $profile->save();
            //return $profile;
            //dd($profile);
        };
        return redirect('/view/profile')->with('message','Profile Updated Successfully');

    }


}
