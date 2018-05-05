<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\User;

class IncomeController extends Controller
{
	public function __construct(){
	   $this->middleware(function ($request, $next) {
            $role_id = Auth::user()->role_id;
            
            if (!in_array($role_id, [1,2,3,4])) {
                return redirect('unallowed');
            }

            return $next($request);
        });
	}

    public function index(){
        
        
        return view('income.index');
    }

    public function add(){

        $roles = DB::table('roles')->get();
        $data['roles'] = $roles;
        return view('users.add', $data);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $roles = DB::table('roles')->get();
        return view('users.edit' , compact('user', 'roles'));
    }

    public function save(Request $request){
        $user = new User;
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        $user->password = Crypt::encrypt('123456');
        $user->role_id = $request->get('role');
        $user->save(); 

        return redirect('dashboard/users')->with('status', 'User berhasil ditambahkan');
    }

    public function update(Request $request){
        $user = User::find($request->get('user_id'));
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        $user->role_id = $request->get('role');
        $user->save(); 

        return redirect('dashboard/users')->with('status', 'Data user berhasil diupdate'); 
    }

    public function delete($id){
        $user = User::find($id);
        $user->is_deleted = 1;
        $user->save(); 
        return redirect('dashboard/users')->with('status', 'User berhasil dihapus'); 
    }
   
    

	
}
