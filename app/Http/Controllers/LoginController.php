<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\first_project_db;
class LoginController extends Controller
{
     /**
     * Instantiate a new LoginController instance.
     */
    public $timestamps = true;
    protected $dateFormat = 'U';
    public function __construct()
    {
    }

    public function try_login(Request $request)
    {
		
	// Validating form data
	$messages = [
	'required' => 'enter :attribute',];
	
    $validator = Validator::make($request->all(),[
    'uname' => 'required|unique:query_detail,first_name|max:255|alpha',
    'email' => 'required',
    'message' => 'required'],$messages);
   
    if($validator->fails())
    {
		return redirect('about')->withErrors($validator)->withInput();
	}
	
   // Code to insert the record
   
       $name = $request->input('uname');
       $email = $request->input('email');
       $message = $request->input('message');
  
       DB::table('query_detail')->insert([
        'first_name' => $name,
        'email' => $email,
        'message' => $message,
       ]);
        
       $records= DB::table('query_detail')->select('first_name');
       $last=DB::getPdo()->lastInsertId();
     
       return view('output', ['name' => $name, 'record' => $last ]);
    }
      
    public function disp_rec()
    {
    // Code to display the record
	     $query_det = first_project_db::all();
         return view('formdata', ['record' => $query_det ]);
        
	}
	
	public function delete_rec(Request $request)
	{
	// Code to delete a record
		$id = $request -> input('id');
		DB::table('query_detail')->where('user_id',$id)->delete();
		$query_det = first_project_db::all();
		return view('formdata', ['record' => $query_det ]);
	}
	
	public function edit_rec(Request $request)
	{
	// Code to edit record
		$id = $request -> input('id');
		$user_record = DB::table('query_detail')->where('user_id',$id)->get();
		return view('editdetail', ['user_rec' => $user_record ]);
	}
	public function update_rec(Request $request)
    {
	// Code to update record
       $id = $request->input('id');       
       $name = $request->input('fname');
       $email = $request->input('u_email');
       $message = $request->input('msg');
       DB::table("query_detail")->where('user_id',$id)->update(array('first_name' => $name, 'email' => $email ,'message' => $message));   
       $query_det = first_project_db::all();
	   return view('formdata', ['record' => $query_det ]);
   
    }	

}
