<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\resources\admin\AdDash;
use App\resources\admin\AdCreate;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function destroy(Admin $admin)
    {
        //
    }
    public function loginAd(){
        return view('admin.loginAd');
    }
    public function loginAdSubmit(Request $req){
        $p = Admin::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($p){
            $request-> session()->put('user',$p->aname);
            if ($req->remember) {
                setcookie('remember',$req->email, time()+36000);
                Cookie::queue('aname',$c->email,time()+60);
            }
            return redirect()->route('admin.AdDash');
        }
        return redirect()->route('AdDash');
    }
    public function AdDash(){
            return view('admin.AdDash');
    

    }
    public function logout(){
        
        session()->forget('user');
        return redirect()->route('loginAd');
    }
    
    public function AdCreate(){
        return view('admin.AdCreate');
    }
    public function AdCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'aname'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'address'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required',
        ],
        [
            'aname.required'=>'Please put your name',
            
        ]
    );
        $a = new Admin();
        $a->id = $request->id;
        $a->aname = $request->aname;
        $a->dob = $request->dob;
        $a->email = $request->email;
        $a->address = $request->address;
        $a->phone = $request->phone;
        $a->password = $request->password;
        
        $patient->save();
        return redirect()->route('admin.AdDash');
    }
    
}
