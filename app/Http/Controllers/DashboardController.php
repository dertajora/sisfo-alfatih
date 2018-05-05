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
	    ini_set('max_input_time', 6000);
        ini_set('max_execution_time', 100000);
        ini_set('memory_limit', '1024M');
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
