<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
    	$nama= "Rofi Tsalis Aziz";
    	return view('biodata',['nama'=>$nama]);
    }
}
