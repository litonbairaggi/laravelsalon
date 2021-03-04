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
         $settingProfile=Settings::find(1);
        return view('backend.allsettings.create',compact('settingProfile'));
    }

    public function store(Request $request){
        // return $request;
        $settingProfile=Settings::find($request->setting_id);
        if(empty($settingProfile)) {
            $allsettingsImageName = time().'.'.$request->logo->extension();  
        $request->logo->move('uploads', $allsettingsImageName);

            $allsettingsobj= new Settings;
            $allsettingsobj->name=$request->name;     
            $allsettingsobj->address=$request->address;     
            $allsettingsobj->email=$request->email;     
            $allsettingsobj->phone=$request->phone;     
            $allsettingsobj->facebook=$request->facebook;       
            $allsettingsobj->linkedin=$request->linkedin;       
            $allsettingsobj->twitter=$request->twitter;           
            $allsettingsobj->instagram=$request->instagram; 
            $allsettingsobj->logo=$allsettingsImageName;
            $allsettingsobj->save();
        Session::flash('message', 'Successfully Create');
        } else {
            $settingProfile->name=$request->name;     
            $settingProfile->address=$request->address;     
            $settingProfile->email=$request->email;     
            $settingProfile->phone=$request->phone;     
            $settingProfile->facebook=$request->facebook;       
            $settingProfile->linkedin=$request->linkedin;       
            $settingProfile->twitter=$request->twitter;           
            $settingProfile->instagram=$request->instagram; 
            $settingProfile->save();
            Session::flash('message', 'Successfully Updated');
        }
        

        return redirect()->back();
    }
}
