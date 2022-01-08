<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Models\lead;
use App\Models\admin;
class AdminController extends Controller
{

  // Index Function to redirect to required url
	public function index(){
		if(session('id')){
			$data = DB::table('leads') 
			->orderBy('id','desc')
			->get();
			 return view('admin/dashboard',['data' => $data]);
		}
		else{
			return view('admin/login');
		}
	}

  // login to the admin
	public function login(Request $req){
		$user_id = $req->user_id;
		$password = md5($req->password);
		$id = admin::select('id')
		->where('user_id',$user_id)
		->where('password', $password)
		->get();
		if(!($id->isEmpty())){
			session(['id'=> $id ]);
			return redirect('admin');
		}
		else{
			session::flash('error','Please Enter Correct email id and password');
			return redirect('admin');
		}
	}

	// Log out to the admin
	public function logout(){
		session(['id' => '']);
		return redirect('admin');
	}

	// Contact to lead (Changing status NC to C)
	public function contact($id){
		$data = lead::find($id);
		$name = $data->name;
		$data->status = 'C';
		$data->save();
		session::flash('status','Status Changed to Contacted for '.$name.'!');
		return redirect('admin');
	}

	// Delete the lead 
	public function delete($id){
		$name = lead::select('name')->where('id',$id)->get();
		$lead = lead::where('id',$id)->delete();
		session::flash('delete','The Lead '.$name[0]->name.' Deleted Successfully!');
		return redirect('admin');
	}



}

?>
