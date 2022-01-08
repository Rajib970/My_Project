<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lead;

class UserController extends Controller
{
 // Function to insert lead details into table
    public function lead(Request $req){
        $lead = new lead();
        $lead->name = $req->name;
        $lead->email = $req->email;
        $lead->address = $req->address;
        $lead->message = $req->message;
        if( $lead->save()){
            echo 1;
        }
        else{
            echo 0;
        }
    }
}
