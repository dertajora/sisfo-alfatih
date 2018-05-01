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

    public function landing_page(){
        return view('website.home');
    }

    public function registration_page(){
        return view('website.registration');
    }

    public function login_guide(){
        return view('website.login_guide');
    }

    public function download_app_end_user(){
        echo "URL Coming Soon";
    }

    public function login_page(){
        return view('website.login');
    }

    

	
}
