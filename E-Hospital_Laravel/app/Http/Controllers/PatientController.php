<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\resources\patient\Dash;
use App\resources\patient\patientCreate;
use Illuminate\Support\Facades\Cookie;

class PatientController extends Controller
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
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
    public function login(){
        return view('patient.login');
    }
    public function loginSubmit(Request $req){
        $p = Patient::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($p){
            session()->put('user',$p->pname);
            if ($req->remember) {
                setcookie('remember',$req->email, time()+36000);
                Cookie::queue('pname',$p->email,time()+60);
            }
            return redirect()->route('Dash');
        }
        return redirect()->route('Dash');
    }
    public function Dash(){
            return view('patient.Dash');
    

    }
    public function logout(){
        
        session()->forget('user');
        return redirect()->route('login');
    }
    public function patientCreate(){
        return view('patient.patientCreate');
    }
    public function patientCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'pname'=>'required',
            'dob'=>'required',
            'email'=>'email',
            'address'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required',
        ],
        [
            'pname.required'=>'Please put your name',
            
        ]
    );
        $patient = new Patient();
        $patient->id = $request->id;
        $patient->pname = $request->pname;
        $patient->dob = $request->dob;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->password = $request->password;
        
        $patient->save();
        return redirect()->route('patient.login');
    }
}
