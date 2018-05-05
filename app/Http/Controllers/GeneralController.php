<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class GeneralController extends Controller
{
	public function __construct(){
	    
	}

    public function unregistered(){
    	return view('errors.unregistered');
    }

    public function unallowed(){
    	return view('errors.unallowed');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    
    

    
}
