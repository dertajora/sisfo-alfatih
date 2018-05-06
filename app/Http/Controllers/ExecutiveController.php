<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use App\Income;

class ExecutiveController extends Controller
{
	public function __construct(){
	   $this->middleware(function ($request, $next) {
            $role_id = Auth::user()->role_id;
            
            if (!in_array($role_id, [4,7])) {
                return redirect('unallowed');
            }

            return $next($request);
        });
	}

    public function index(){
        $data['income'] = DB::table('incomes')
                    ->select(DB::raw('IFNULL(sum(amount),0) as total_income'))
                    ->whereRaw('month(created_at) = ?', [date('m')])
                    ->whereRaw('year(created_at) = ?', [date('Y')])
                    ->pluck('total_income');

        $data['expense'] = DB::table('expenses')
                    ->select(DB::raw('IFNULL(SUM(amount),0) as total_expense'))
                    ->whereRaw('month(created_at) = ?', [date('m')])
                    ->whereRaw('year(created_at) = ?', [date('Y')])
                    ->where('status',1)
                    ->pluck('total_expense');
        
        return view('home.executive', $data);
        
    }

	
}
