<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
     public function index(){
         return view('form');
     }
     public function register(Request $request){
    
        dd($request->all());
        
    }
     
}
