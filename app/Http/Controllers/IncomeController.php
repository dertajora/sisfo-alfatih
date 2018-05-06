<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\Income;

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
        $incomes = DB::table('incomes')
                    ->select('incomes.id','incomes.name','amount','remarks','users.name as created_by', 'incomes.created_at','type_id')
                    ->join('users','users.id','=','incomes.created_by')
                    ->orderBy('incomes.id');

        if (!empty($_GET['type'])) {
            $incomes = $incomes->where('type_id', $_GET['type']); 
        }
        
        $data['incomes'] = $incomes->paginate(10);
        return view('income.index', $data);
    }

    public function add(){
        return view('income.add');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $roles = DB::table('roles')->get();
        return view('users.edit' , compact('user', 'roles'));
    }

    public function save(Request $request){
        $user = new Income;
        $user->name = $request->get('name');
        $user->amount = $request->get('amount');
        $user->remarks = $request->get('remarks');
        $user->type_id = $request->get('type');
        $user->created_by = Auth::user()->id;
        
        $user->save(); 

        return redirect('dashboard/income')->with('status', 'Pemasukan berhasil ditambahkan');
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
