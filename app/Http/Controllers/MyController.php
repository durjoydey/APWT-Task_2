<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller

{
   
    public function ContactPage()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request){
        
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'address'=>'required',
                'email'=>'required',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
                
            ],
            [
                'name.required'=>'Name Required!',
                'name.min'=>'Name must have more 5 char',
                'name.max'=>'Name must be smaller than 10 charcters',
                'address.required'=>'Adress requiredd!',
                'email.required'=>'Email required!',
                'phone.required'=>'Phone Number required!',
                'phone.regex'=>'Phone number must be numbers'
            ]
        );
        

        return "<h1>Information was submitted succesfully</h1>";      
    }
 
}