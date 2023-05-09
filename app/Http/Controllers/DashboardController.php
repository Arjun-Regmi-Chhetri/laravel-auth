<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class DashboardController extends Controller
{

    public function index(){
        return view('dashboard.dashboard');
    }

    
    // public function dashboard(){
    //     $data = array();

    //     if(Session::has('id')){
    //         $data = User::where('id','=',Session::get('id'))->first();
       
    //     }
    //     return view('dashboard.dashboard', compact('data'));
    // }
   

    public function logout(){
        if(Session::has('id')){
            Session::pull('id');
            return redirect('');
        }
    }
}
