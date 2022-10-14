<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Details;

class DeatilsController extends Controller
{
    Public function deal(){
        return view('details');
    }
    public function show(Request $request){

        $request->validate(
            [
            'password' => 'required',
            'email' =>'required',
            'address'=>'required',
            ]
        );
    
        //  dd($request->all());
        
        // creating object 
        $details = new Details();
        $details->email=$request['email'];
        $details->password=$request['password'];
        $details->confirmpassword=$request['confirmpassword'];
        $details->address=$request['address'];
        $details->date=$request['date'];
        $details->Gender=$request['Gender'];
        $details->save();
         return redirect('/details/display');
        
    }
    public function display(){
       $details=Details::all();
       $data=compact('details');
        return view('details-display')->with($data);


    }
}
