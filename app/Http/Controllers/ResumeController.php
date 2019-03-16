<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
   public function index(){
    	 $user= Auth::user();
       
        return view('addcv')->with('user',$user);
    }
}
