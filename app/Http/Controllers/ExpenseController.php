<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\Expense;

class ExpenseController extends Controller
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
        $expenses = DB::table('expenses')
                    ->select('expenses.id','expenses.name','amount','remarks','expenses.name as created_by', 'expenses.created_at',
                             'type_id','status', DB::raw('date(expenses.created_at) as created_date'))
                    ->join('users','users.id','=','expenses.created_by')
                    ->orderBy('expenses.id');

        if (!empty($_GET['type'])) {
            $expenses = $expenses->where('type_id', $_GET['type']); 
        }
        
        $data['expenses'] = $expenses->paginate(10);
        return view('expense.index', $data);
    }

    public function add(){
        return view('expense.add');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $roles = DB::table('roles')->get();
        return view('users.edit' , compact('user', 'roles'));
    }

    public function save(Request $request){
        $user = new Expense;
        $user->name = $request->get('name');
        $user->amount = $request->get('amount');
        $user->remarks = $request->get('remarks');
        $user->type_id = $request->get('type');
        $user->created_by = Auth::user()->id; 
        $user->status = 0; 
        $user->approved_by= 0; 
        $user->save(); 

        return redirect('dashboard/expense')->with('status', 'Permintaan pengeluaran berhasil ditambahkan');
    }

    public function approve($id){
        $user = Expense::find($id);
        $user->status = 1;
        $user->save(); 
        return redirect('dashboard/expense')->with('status', 'Anggaran berhasil disetujui'); 
    }

    public function reject($id){
        $user = Expense::find($id);
        $user->status = 2;
        $user->save(); 
        return redirect('dashboard/expense')->with('status', 'Anggaran telah ditolak'); 
    }
   
    

	
}
