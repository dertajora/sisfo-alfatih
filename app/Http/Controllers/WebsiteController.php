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

    public function login_handle(Request $request){
        $user_found = User::where('email', $request->get('email'))->count();
        if ($user_found == 0) 
            return redirect('login')->with('status', 'Login failed. User not found!'); 

        $user = User::where('email', $request->get('email'))->first();
        $user_current_password = Crypt::decrypt($user->password);

        if ($user_current_password != $request->get('password')) 
            return redirect('login')->with('status', 'Login failed. Invalid password!'); 

        // auth user
        Auth::login($user);
        $role = Roles::where('id', $user->role_id)->first();
        session(['role_name' => $role->name]);
        
        // redirect to intended menu/url
        return redirect()->intended('/dashboard');
    }
	
}
