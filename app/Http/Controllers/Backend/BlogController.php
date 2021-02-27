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

        $blogImageName = time().'.'.$request->blog_img->extension();  
        $request->blog_img->move('uploads', $blogImageName);

        $blogobj= new Blog;       
        $blogobj->name=$request->name;
        $blogobj->description=$request->description;
        $blogobj->blog_img=$blogImageName;
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

    public function update(Request $request, $id){
        $bloProfile=Blog::findOrFail($id);
        $bloProfile->name=$request->name;
        $bloProfile->description=$request->description;
        $bloProfile->save();

        Session::flash('message', 'Successfully Update'); 
        return redirect()->back();
    }
    
    public function delete($id){
        $blogProfile=Blog::findOrFail($id);
        $blogProfile->delete();
        Session::flash('message', 'Blog successfully Delete');
        return redirect()->back();
        //return view('backend.servicess.delete');

    }

}
