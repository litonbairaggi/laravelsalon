<?php

namespace App\Http\Controllers;

use App\Team;
use App\Services;
use App\Blog;
use App\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        
        $teams=Team::get();
        $servicess=Services::orderBy('id','desc')->limit(3)->get();
        $blogs=Blog::orderBy('id', 'asc')->limit(2)->get();
        $testimonials=Testimonial::get();
        return view('frontend.pages.index', compact('teams','servicess','blogs','testimonials'));
    }
    public function about(){
        $teams=Team::get();
        return view('frontend.pages.about', compact('teams'));
    }
    public function services(){
        $servicess=Services::orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.services',compact('servicess'));
    }
    public function services_details(){
        return view('frontend.pages.services_details');
    }
    public function gallery(){
        return view('frontend.pages.gallery');
    }
    public function gallery_02(){
        return view('frontend.pages.gallery_02');
    }
    public function gallery_03(){
        return view('frontend.pages.gallery_03');
    }
    public function blog(){
        $blogs=Blog::get();
        return view('frontend.pages.blog',compact('blogs'));
    }
    public function blog_details(){
        $blogdetails=Blog::orderBy('id', 'desc')->limit(1)->get();
        return view('frontend.pages.blog_details',compact('blogdetails'));
    }
    public function blog_grid(){
        $bloggrids=Blog::get();
        return view('frontend.pages.blog_grid', compact('bloggrids'));
    }
    public function blog_list(){
        $bloglists=Blog::get();
        return view('frontend.pages.blog_list', compact('bloglists'));
    }
    public function testimonials(){
        $testimonials=Testimonial::get();
        return view('frontend.pages.testimonials',compact('testimonials'));
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
