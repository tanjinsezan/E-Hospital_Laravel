<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Patient;
use App\Models\TokenP;
use DateTime;

class ApiPatientController extends Controller
{
   // public function list(){
   //  $patient = Patient::all();
   //  return $patient;
   // }
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
   public function login(Request $req){
      $patient1 = Patient::where('email', $req->email)->where('password', $req->password)->first();
      if($patient1){
         $api_token = Str::random(64);
         $token = new TokenP();
         $token->pid = $patient1->id;
         $token->token = $api_token;
         $token->created_at = new DateTime();
         $token->save();
         return $token;
      }
      return "No user found!";
      
     }

     public function  logout(Request $req){
      $token = PToken::where('token',$req->token)->first();
      if($token){
          $token->expired_at =new DateTime();
          $token->save();
          return $token;
      }
   }
}
