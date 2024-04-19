<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.Login');
    }
    
    function login(Request $request)
    {
       // dd($request);
        $validate = $request->validate(

            [
                
                'email'=>'required|email',
                'password'=>'required'
                
            ]
            );
           
            if(Auth::attempt([
                'email'=>$request->email,
                'password'=>$request->password
               
            ])){
              return redirect()->intended('tktlist')->with('success',"loged in successfully");
            }else{
              return redirect()->back()->with('error','Not Registered');
            }

          
    }
    function adminregistration()
    {
       return view('auth.Regist');
    }
    function createregs(Request $request)
    {
       //dd($request);
        
       $validate = $request->validate(

        [
            'name'=>"required|max:8",
            'email'=>"required|unique:users,email",
            'password'=>"required|min:8",
            'confirm_password'=>"required|same:password"
        ]
        );
        
     $user =   User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
           
        ]);
   if($user){
    return redirect()
        ->back()
        ->with('success','User registered succesfullly');
        

   }

    }
}
