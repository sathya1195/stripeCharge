<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
   
    public function login(){

        return view('Auth/login');
    }

     public function authendicate(Request $request){
        
        try{
            $request->validate([            
                'email'=>'required',
                'password'=>'required'
            ]);

            $email = $request->input('email');
            $password = $request->input('password');

        
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
            
                $user = User::where('email',$email)->first();
                

                Auth::login($user);
                return redirect()->route('product.list')->withSuccess('loggedin Succesfully!');;
            }else{           
                return back()->withErrors('Please Enter Valid credentials');
            }
            }catch(\Exception $e){
                return back()->withErrors('Please Enter Valid credentials');
            }        
     }

    public function logout(){
        Auth::logout();
        return redirect()->route('product.list');
    }
}
