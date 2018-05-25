<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth, Input;
use File;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Files;

class FileController extends Controller
{
    public function __construct(){
        ini_set('max_input_time', 6000);
        ini_set('max_execution_time', 100000);
        ini_set('memory_limit', '1024M');
        ini_set('upload_max_size', '64M');
        ini_set('post_max_size', '64M');
        $this->middleware(function ($request, $next) {
            $role_id = Auth::user()->role_id;
            
            if (!in_array($role_id, [1,2,3,4])) {
                return redirect('unallowed');
            }

            return $next($request);
        });
    }

    public function index(Request $request){

      $files = DB::table('files')
                                  ->select('files.id','original_name','file_name','users.name as upload_by',  
                                           'remarks','files_subcategories.subcategory','files.created_at') 
                                  ->leftjoin('users','users.id','=','files.upload_by')
                                  ->leftjoin('files_subcategories','files_subcategories.id','=','files.sub_category_id')
                                  ->where('files.category_id', 1);

      if (!empty($_GET['sub_category_id'])) {
          $files = $files->where('sub_category_id', $request->input('sub_category_id')); 
      }

      if (!empty($_GET['upload_date'])) {
          $files = $files->whereDate('files.created_at', $request->input('upload_date')); 
      }

      $data['files'] = $files->paginate(10);
      $data['subcategories'] = DB::table('files_subcategories')->where('category_id',1)->get();
      return view('file_school.index', $data);
    }


    public function new(){
        $data['subcategories'] = DB::table('files_subcategories')->where('category_id',1)->get();
        return view('file_school.new', $data); 
    }

    public function save(Request $request){
      
      $filename = null;
      $remarks = '';
      $status = 0;

      if($request->hasFile('attachment')){

          // create directory for that day if not exist
          $path = public_path().'/upload_files/';
          File::makeDirectory($path, $mode = 0777, true, true);
          

          try{
            $filename=date('Y-m-d').'__'.date('H-i-s').'__'.Auth::user()->id."__".$request->file('attachment')->getClientOriginalName();
            $filename = str_replace(" ", "-", $filename);
            $request->file('attachment')->move($path, $filename);

            $data = array( 
               "upload_by" => Auth::user()->id,
               "file_name" => $filename,
               "original_name" => $request->file('attachment')->getClientOriginalName(),
               "category_id" => 1,
               "sub_category_id" => $request->get("sub_category_id"),
               "remarks" =>$request->get("remarks"));

            Files::create($data);

          }catch(Exception $e){

          }
      }

      return redirect::to('dashboard/file_school')->with("success", "New file succesfully uploaded");
      
    }

    
}
