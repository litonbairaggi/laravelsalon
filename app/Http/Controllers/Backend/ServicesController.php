<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use Session;
use DB;

class ServicesController extends Controller
{
    //
    public function create(){
        return view('backend.servicess.create');
    }
    public function store(Request $request){

        $servicesImageName = time().'.'.$request->services_img->extension();  
   
        $request->services_img->move('uploads', $servicesImageName);

        $servicesobj= new Services;       
        $servicesobj->name=$request->name;
        $servicesobj->description=$request->description;
        $servicesobj->services_img=$servicesImageName;

        $servicesobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
    }
    public function list(){
        $servicess =Services::all();
        return view('backend.servicess.list', compact('servicess'));
    }
    public function edit($id){
        $services=Services::findOrFail($id);
        return view('backend.servicess.edit', compact('services'));
    }
    public function delete($id){
        $servicesProfile=Services::findOrFail($id);
        $servicesProfile->delete();
        return redirect()->back();
        //return view('backend.servicess.delete');
    }
    public function update(Request $request, $id){
        $serviceProfile=Services::findOrFail($id);
        $serviceProfile->name=$request->name;
        $serviceProfile->description=$request->description;
        $serviceProfile->save();

        Session::flash('message', 'Successfully Update'); 
        return redirect()->back();
    }
}
