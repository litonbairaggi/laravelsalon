<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    //
    public function create(){
        return view('backend.team.create');
    }
    //
    public function list(){
        return view('backend.team.list');
    }
}
