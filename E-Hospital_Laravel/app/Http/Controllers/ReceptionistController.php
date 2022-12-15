<?php

namespace App\Http\Controllers;

use App\Models\Receptionist;
use App\Http\Requests\StoreReceptionistRequest;
use App\Http\Requests\UpdateReceptionistRequest;

class ReceptionistController extends Controller
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
     * @param  \App\Http\Requests\StoreReceptionistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReceptionistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receptionist  $receptionist
     * @return \Illuminate\Http\Response
     */
    public function show(Receptionist $receptionist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receptionist  $receptionist
     * @return \Illuminate\Http\Response
     */
    public function edit(Receptionist $receptionist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReceptionistRequest  $request
     * @param  \App\Models\Receptionist  $receptionist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReceptionistRequest $request, Receptionist $receptionist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receptionist  $receptionist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receptionist $receptionist)
    {
        //
    }
    public function loginRes(){
        return view('receptionist.loginRes');
    }
    public function loginResSubmit(Request $req){
        $r = Receptionist::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        if($r){
            session()->put('user',$r->rname);
            if ($req->remember) {
                setcookie('remember',$req->email, time()+36000);
                Cookie::queue('pname',$r->email,time()+60);
            }
            return redirect()->route('ResDash');
        }
        return redirect()->route('ResDash');
    }
    public function ResDash(){
            return view('receptionist.ResDash');
    

    }
    public function logout(){
        
        session()->forget('user');
        return redirect()->route('loginRes');
    }
}
