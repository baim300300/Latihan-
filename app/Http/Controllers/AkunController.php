<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AkunController extends Controller
{
      
    public function index()
    {   
        $user= Auth::user();
    	$negara=DB::table('apps_countries')->get();

        return view('akun')->with('user',$user)
        				->with('apps_countries',$negara);
        
    }

}
