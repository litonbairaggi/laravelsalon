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

        $servicesobj= new Services;       
        $servicesobj->name=$request->name;
        $servicesobj->description=$request->description;
        $servicesobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
    }

    public function list(){
        return view('backend.servicess.create');
    }
}
