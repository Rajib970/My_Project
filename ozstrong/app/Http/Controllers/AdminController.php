<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use App\Models\lead;
use App\Models\subscriber;


class AdminController extends Controller
{
    // index function
    public function index(){
        if(session('id')){
            $data = DB::table('leads')
                        ->orderBy('id','desc')
                        ->get();
            return view('admin/dashboard',['data'=>$data]);
        }
        else{
            return view('admin/login');
        }
    }

 // login function 
    public function login( Request $req){
        $email = $req->email;
        $password = md5($req->password);
        $id = admin::select('id')
        ->where('email', $email)
        ->where('password', $password)
        ->get();

        if(!($id->isEmpty())){
            session(['id'=>$id]);
            return redirect('admin');
        }
        else{
            session::flash('error','Please Enter Correct email id and password');
            return redirect('admin');
        }
    }

 // logout function
    public function logout(){
        session::flush();
        return  redirect('admin');
    }

 // Fetch Subscribers
    public function subscribers(){
        if(session('id')){
            $data = DB::table('subscribers')
            ->orderBy('id','desc')
            ->get();
            return view('admin/subscribers',['data'=>$data]);
        }
        else{
            return  redirect('admin');
        }
    }


 // Contact to Lead
    public function contact($id){
        $data = lead::find($id);
        $name = $data->name;
        $data->status = 'C';
        $data->save();
        session::flash('status','Status changed to Contacted for '.$name);
        return redirect('admin');

    }

 // Delete Lead
    public function delete($id){
        $name = lead::select('name')->where('id',$id)->get();

        $lead = lead::find($id);
        $lead->delete();
        session::flash('delete','The Lead '.$name[0]->name.' Deleted Successfully!');
        return redirect('admin');
    }

 // Approve Subscription
    public function approve_subscription($id){
        $data = subscriber::find($id);
        $data->status = 'A';
        $data->save();
        session::flash('approved','The subscriber '. $data->name .' Subscription Appproved!');
        return redirect('subscribers');
    }

 // Cancel Subscription 
    public function cancel_subscription($id){
        $data = subscriber::find($id);
        $data->status = 'C';
        $data->save();
        session::flash('cancel','The Subscriber '.$data->name. ' Subscription Cancelled!');
        return redirect('subscribers');

    }

 // Delete Subscriber
    public function delete_subscriber($id){
        $data = subscriber::find($id);
        $name = $data->name;
        $data->delete();
        session::flash('delete-subscriber','The Subscriber '.$name.' Deleted Successfully');
        return redirect('subscribers');

    }
}
