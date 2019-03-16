<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Document as d;
use Illuminate\Support\Facades\DB;



class DocumentController extends Controller
{
    public function index(){
    	 $user= Auth::user();
       
        return view('atur_document')->with('user',$user);
    }
    

}
