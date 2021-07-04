<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //The display view for welcome page


    public function index(){
        return view('welcome');
    }
}