<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Session;
use DB;

class SliderController extends Controller
{
    //
    public function create(){
        return view('backend.slider.create');
    }

    public function list(){
        $sliders=Slider::all();
        return view('backend.slider.list',compact('sliders'));
    }

    public function store(Request $request){

        $sliderImageName = time().'.'.$request->slider_img->extension();  
        $request->slider_img->move('uploads', $sliderImageName);

        $sliderobj= new Slider;       
        $sliderobj->name=$request->name;
        $sliderobj->description=$request->description;
        $sliderobj->slider_img=$sliderImageName;
        $sliderobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
    }

    public function edit($id){
        $slider=Slider::all();
        return view('backend.slider.edit',compact('slider'));
    }

    public function update(Request $request, $id){
        $sliderProfile=Slider::findOrFail($id);
        $sliderProfile->name=$request->name;
        $sliderProfile->description=$request->description;
        $sliderProfile->save();
        
        Session::flash('message', 'Successfully Update'); 
        return redirect()->back();
    }

    public function delete($id){
        $slidersProfile=Slider::findOrFail($id);
        $slidersProfile->delete();
        Session::flash('message', 'Slider successfully Delete');
        return redirect()->back();
    }

}
