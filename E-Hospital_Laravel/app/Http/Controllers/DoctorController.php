<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {

    }
    public function DocCreate(){
            return view('admin.DocCreate');
        }
    public function DocCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'dname'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'speciality'=>'required',
            'hid'=>'required',
            'hname'=>'required',
            'password'=>'required',
            
        ],
        [
            'hname.required'=>'Please put doctor name',
            
        ]
    );
        $d = new Doctor();
        $d->id = $request->id;
        $d->dname = $request->dname;
        $d->dob = $request->dob;
        $d->email = $request->email;
        $d->phone = $request->phone;
        $d->speciality = $request->speciality;
        $d->hid = $request->hid;
        $d->hname = $request->hname;
        $d->password = $request->password;
        $d->save();
        return redirect()->route('AdDash');
    }
    public function DoctorList()
    {
        $docList = Doctor::all();
        return Doctor::all(); 
       
        //return view('admin.DoctorList')->with('docList', $docList);
      
    }
    public function DoctorEdit(Request $request){
        $docEdit = Doctor::where('id', $request->id)->first();
        return view('admin.DoctorEdit')->with('docEdit', $docEdit);
       
    
    }
    public function DoctorEditSubmitted(Request $request){
        $docEdit = Doctor::where('id', $request->id)->first();
        
        $docEdit->id= $request->id;
        $docEdit->dname= $request->dname;
        $docEdit->dob= $request->dob;
        $docEdit->email= $request->email;
        $docEdit->phone= $request->phone;
        $docEdit->speciality= $request->speciality;
        $docEdit->hid= $request->hid;
        $docEdit->hname= $request->hname;
            
        $docEdit->save();
        return redirect()->route('DoctorList');

    }

    public function DoctorDelete(Request $request){
        $docEdit = Doctor::where('id', $request->id)->first();
        $docEdit->delete();

        return redirect()->route('DoctorList');
    }
    public function loginDoc(){
        return view('doctor.loginDoc');
    }
    public function loginDocSubmit(Request $req){
        $p = Admin::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($p){
            $request-> session()->put('user',$p->dname);
            if ($req->remember) {
                setcookie('remember',$req->email, time()+36000);
                Cookie::queue('dname',$c->email,time()+60);
            }
            return redirect()->route('doctor.DocDash');
        }
        return redirect()->route('DocDash');
    }
    public function DocDash(){
            return view('doctor.DocDash');
    

    }
    public function logout(){
        
        session()->forget('user');
        return redirect()->route('loginDoc');
    }
   

}
