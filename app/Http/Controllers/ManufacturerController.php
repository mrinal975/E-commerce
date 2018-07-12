<?php

namespace App\Http\Controllers;
use App\Manufacturer;
use Illuminate\Http\Request;
use DB;
class ManufacturerController extends Controller
{
    public function createManufacturer(){
        return view('admin.manufacturer.createManufacturer');
    }
    public function storeManufacturer(Request $request){

        $this->validate($request,[
           'manufacturerName'=>'required',
           'manufacturerDescription'=>'required'
        ]);
            //Elequent ORM

//        $manufacturer=new Manufacturer();
//        $manufacturer->manufacturerName=$request->manufacturerName;
//        $manufacturer->manufacturerDescription=$request->manufacturerDescription;
//        $manufacturer->publicationStatus=$request->publicationStatus;
//        $manufacturer->save();
//
        Manufacturer::create($request->all());
        
//        $manufact=new Manufacturer();
//        $manufact->manufacturerName=$request->manufacturerName;
//        $manufact->manufacturerDescription=$request->manufacturerDescription;
//        $manufact->publicationStatus=$request->publicationStatus;
//        $manufact->save();



                //Query builder using
//        DB::table('manufacturers')->insert([
//            'manufacturerName'=>$request->manufacturerName,
//            'manufacturerDescription'=>$request->manufacturerDescription,
//            'publicationStatus'=>$request->publicationStatus,
//        ]);

        return redirect('manufacturer/add')->with('message','Manufafturere added successfully');
    }
    public function manageManufacturer(){
        $manufactur= Manufacturer::all();
        //return $manufactur;
        return view('admin.manufacturer.manageManufacturer',['manufactur'=>$manufactur]);
    }
    public function editManufacturer($id){
        $manufactureById=Manufacturer::findOrFail($id);
        return view('admin.manufacturer.editManufacturer',['manufactureById'=>$manufactureById]);

    }
    public function updateManufacturer(Request $request){
        $manufacter=Manufacturer::findOrFail($request->id);
        $manufacter->manufacturerName=$request->manufacturerName;
        $manufacter->manufacturerDescription=$request->manufacturerDescription;
        $manufacter->publicationStatus=$request->publicationStatus;
        $manufacter->save();

        return redirect('manufacturer/manage')->with('message','Manufacturer Updated Successfully');
    }
    public function deleteManufacturer($id){
        $manufacter=Manufacturer::findOrFail($id);
        //return $manufacter;
        $manufacter->delete();
        return redirect('manufacturer/manage')->with('message','Manufacter Deleted Successfully');


    }
}
