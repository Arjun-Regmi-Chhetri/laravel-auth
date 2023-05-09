<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:8'
        ]);

        $user = User::where('email','=',$request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('id',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('pasfail', 'password doesnot match' );
            }
        }else{
            return back()->with('fail', 'email doesnot match' );
        }

    }
}
