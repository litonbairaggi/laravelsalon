<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Session;
use DB;

class GalleryController extends Controller
{
    //
    public function create(){
        return view('backend.gallery.create');
    }

    public function store(Request $request){

        $galleryImageName = time().'.'.$request->gallery_img->extension();  
        $request->gallery_img->move('uploads', $galleryImageName);

        $galleryobj= new Gallery;       
        $galleryobj->name=$request->name;
        $galleryobj->gallery_img=$galleryImageName;
        $galleryobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
    }
    public function list(){
        $gallerys =Gallery::all();
        return view('backend.gallery.list', compact('gallerys'));
    }

    public function edit($id){
        $gallery=Gallery::findOrFail($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id){
        $galleryProfiles=Gallery::findOrFail($id);
        $galleryProfiles->name=$request->name;
        $galleryProfiles->save();

        Session::flash('message', 'Successfully Update'); 
        return redirect()->back();
    }

    public function delete($id){
        $galleryProfile=Gallery::findOrFail($id);
        $galleryProfile->delete();
        Session::flash('message', 'Blog successfully Delete');
        return redirect()->back();
        //return view('backend.gallery.delete');

    }
}
