<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    //
    public function create(){
        return view('backend.services.create');
    }
    public function list(){
        return view('backend.services.create');
    }
}
