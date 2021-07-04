<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //Display the welcome page 


    public function index(){
        return view('welcome');
    }
}