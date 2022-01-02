<?php

namespace App\Http\Controllers;
 
use App\Models\lead;
use App\Models\subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Method to store form data in leads table
     public function lead(Request $req){
        $lead = new lead(); 
        $lead->name = $req->name;
        $lead->phone = $req->phone;
        $lead->email = $req->email;
        $lead->subrub = $req->subrub;
        $lead->product = $req->product;
        $lead->message = $req->message;
        $response = $lead->save();
        echo $response;
     }

     // Method to store form data in subscribers table
     public function subscribe(Request $req){
      $subscriber = new subscriber();
      $subscriber->name = $req->name;
      $subscriber->email = $req->email;
      $subscriber->save();
      echo true;
     }
}
