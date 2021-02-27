<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Session;
use DB;

class SettingsController extends Controller
{
    //
    public function create(){
        return view('backend.allsettings.create');
    }

    public function store(Request $request){

        $allsettingsImageName = time().'.'.$request->logo->extension();  
        $request->logo->move('uploads', $allsettingsImageName);

        $allsettingsobj= new Settings;
        $allsettingsobj->email=$request->email;     
        $allsettingsobj->facebook=$request->facebook;       
        $allsettingsobj->linkedin=$request->linkedin;       
        $allsettingsobj->twitter=$request->twitter;           
        $allsettingsobj->instagram=$request->instagram; 
        $allsettingsobj->logo=$allsettingsImageName;
        $allsettingsobj->save();
        Session::flash('message', 'Successfully Create');

        return redirect()->back();
    }
}
