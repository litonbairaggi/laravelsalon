<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Session;
use DB;

class TestimonialController extends Controller
{
    //
    //
    public function create(){
        return view('backend.testimonial.create');
    }
    public function store(Request $request){

        $testimonialImageName = time().'.'.$request->testimonial_img->extension();
        $request->testimonial_img->move('uploads', $testimonialImageName);

        $testimonialobj= new Testimonial;       
        $testimonialobj->name=$request->name;
        $testimonialobj->description=$request->description;
        $testimonialobj->testimonial_img = $testimonialImageName;
        $testimonialobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
    }
    public function edit($id){
        $testimonial=Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }

    public function list(){
        $testimonials =Testimonial::all();

        return view('backend.testimonial.list', compact('testimonials'));
    }
    public function delete($id){
        $testimonialProfile=Testimonial::findOrFail($id);
        $testimonialProfile->delete();
        return redirect()->back();
        //return view('backend.testimonial.delete');
    }
    public function update(Request $request, $id){
        $testiProfile=Testimonial::findOrFail($id);
        $testiProfile->name=$request->name;
        $testiProfile->description=$request->description;
        $testiProfile->save();

        Session::flash('message', 'Successfully Update'); 
        return redirect()->back();
    }
}
