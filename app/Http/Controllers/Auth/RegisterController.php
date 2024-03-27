<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register(){ 
       
        return view('Auth/register');
    }

    public function register_sumit(Request $request)
    {
        try{

       
       
     
     
        $data = $request->except('_token');

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email|email',
            'password'=>'required',
                     
        ]);  
        $password =  Hash::make($request->input('password'));
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $password;        
        $user->save();
        $userId = $user->id;
       
            Auth::login($user);
           
            
             
             return redirect()->route('product.list')->withSuccess('Registered Succesfully!');      
        }catch(\Exception $e){
            return back()->withErrors('Something went Wrong! Please try again.');
        }  
    }
}
