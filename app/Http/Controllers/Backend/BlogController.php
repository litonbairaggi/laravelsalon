<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Session;
use DB;

class BlogController extends Controller
{
    //
    public function create(){
        return view('backend.blog.create');
    }

    public function store(Request $request){

        $blogobj= new Blog;       
        $blogobj->name=$request->name;
        $blogobj->description=$request->description;
        $blogobj->save();    
        Session::flash('message','Successfully Create');
        return redirect()->back();
        
    }
    public function list(){
        $blogs =Blog::all();

        return view('backend.blog.list', compact('blogs'));
    }

    public function edit($id){
        $blog=Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog'));
    }
    public function delete($id){
        $blogProfile=Blog::findOrFail($id);
        $blogProfile->delete();
        return redirect()->back();
        //return view('backend.servicess.delete');

    }

    public function update(Request $request, $id){
        $bProfile=Blog::findOrFail($id);
        $bProfile->name=$request->name;
        $bProfile->description=$request->description;

        $bProfile->save();
        Session::flash('sucess', 'Blog successfully Update'); 
        return redirect()->back();
    }
}
