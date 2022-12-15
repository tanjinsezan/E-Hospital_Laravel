<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\Token;
use DateTime;

class ApiAdminController extends Controller
{
    public function list(){
        $patient = Patient::all();
        return $patient;
       }
       public function add(Request $request){
        $p1 = new Patient();
        $p1->id = $request->id;
        $p1->pname = $request->pname;
        $p1->dob = $request->dob;
        $p1->email = $request->email;
        $p1->phone = $request->phone;
        $p1->password = $request->password;
        
        if($p1->save()) return "Patient added!";
  
     } 
     public function AdminLogin(Request $request){
        $admin = Admin::where('email', $request->email)->where('password', $request->password)->first();
        if($admin){
           $api_token = Str::random(64);
           $token = new Token();
           $token->aid = $admin->id;
           $token->token = $api_token;
           $token->created_at = new DateTime();
           $token->save();
           return $token;
        }
        return "No user found!";
        
       }
       public function  logout(Request $request){
  
        $token = Token::where('token',$request->token)->first();
        if($token){
            $token->expired_at =new DateTime();
            $token->save();
            return $token;
        }
    }
}
    


