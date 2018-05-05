<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Companies;
use App\Roles;
use Illuminate\Support\Facades\Crypt;
use Auth;


class WebsiteController extends Controller
{
	public function __construct(){
	    ini_set('max_input_time', 6000);
        ini_set('max_execution_time', 100000);
        ini_set('memory_limit', '1024M');
	}

    public function home(){
        return view('website.home');
    }

    public function program(){
        return view('website.program');
    }

    public function news(){
        return view('website.news');
    }

    public function teachers(){
        return view('website.teachers');
    }

    public function about(){
        return view('website.about');
    }

    public function login_page(){
        return view('website.login');
    }
	
}
