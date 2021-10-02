<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function signin()
    {
        $mes="";
        return view("pages.login")->with('data',$mes);
    }
    public function loginform(Request $request)
    {
        $validate=$request->validate([

             'name'=>'required',
             'password'=>'required'
        ],
        [
            'name.required'=>'Username required!',
            'password.required'=>'Password required!'
        ]
        
        );
        $name=$request->name;
        $password=$request->password;
        $user="";
        $data="";
        $result="ok";
        $mes="";

        $data=["Durjoy"=>"asdfgh","Rahim"=>"asdfgh",];
            foreach ($data as $key => $value) {
                if($name==$key && $password==$value )
                {
    
                    $user=$name;
                    return view("pages.userview",['user'=>$user]);
                    
                    
    
                }
                else {
                    $data="<h1>Login was successful</h1>";
                }

              
            }
            if ($result==$data) {
                $mes="user name password not match";
                return view("pages.login")->with('data',$mes);
            }
        
        
        
    }


    public function create(){
        return view('pages.registration');
    }
    public function createSubmit(Request $request){
        
        $validate = $request->validate([
                'fname'=>'required|min:5',
                'lname'=>'required|min:2',
                'dob'=>'required',
                'email'=>'required|email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required|min:5',
                'address'=>'required|min:5',
                              
            ],
            [
                'fname.required'=>'First Name Required!',
                'fname.min'=>'First name must have more than 5 charcters',
                'lname.required'=>'Last Name Required',
                'lname.min'=>'Last name must have more than 1 charcters',
                'dob.required'=>'Please put your date of birth',
                'email.required'=>'Email Required!',
                'email.email'=>'Email is not valid!',
                'phone.required'=>'Phone number required!',
                'phone.regex'=>'Phone number must be numeric',
                'password.required'=>'Password required!',
                'password.min'=>'Name must have more than 4 charcters',
                'address.required'=>'address required!',
                'address.min'=>'Address must have more than 4 charcters'
            
               


            ]
        );
        

        return "<h1>Registration was successful</h1>";      
    }
    
    

}