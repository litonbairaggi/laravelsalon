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

        $testimonialobj= new Testimonial;       
        $testimonialobj->name=$request->name;
        $testimonialobj->description=$request->description;
        $testimonialobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
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
}
