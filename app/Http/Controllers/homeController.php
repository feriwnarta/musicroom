<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //For index or default home view
    public function index(){
        return view("welcome");
    }
}
