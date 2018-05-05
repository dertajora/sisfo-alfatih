<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;


class DashboardController extends Controller
{
	public function __construct(){
        
	}

    public function home(){
        return view('home.home');
    }

    public function executive(){
        return view('home.executive');
    }

    public function student(){
        return view('home.student');
    }

    public function expense(){
        return view('home.expense');
    }

    public function income(){
        return view('home.income');
    }
   
    

	
}
