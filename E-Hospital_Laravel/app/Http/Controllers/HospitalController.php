<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use resources\views\admin;
use resources\views\patient;
use resources\views\patient\search;

class HospitalController extends Controller
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
     * @param  \App\Http\Requests\StoreHospitalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospitalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHospitalRequest  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHospitalRequest $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
    public function hosCreate(){
        return view('admin.hosCreate');
    }
    public function hosCreateSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'hname'=>'required',
            'location'=>'required',
            'availablebed'=>'required',
            'totalbed'=>'required',
            'icu'=>'required',
            'ccu'=>'required',
            
        ],
        [
            'hname.required'=>'Please put hospital name',
            
        ]
    );
        $app = new Hospital();
        $app->id = $request->id;
        $app->hname = $request->hname;
        $app->location = $request->location;
        $app->availablebed = $request->totalbed;
        $app->icu = $request->icu;
        $app->ccu = $request->ccu;
        
        $app->save();
        return redirect()->route('AdDash');
    }
    public function HospitalList()
    {
        $hosList = Hospital::all(); 
       
        return view('patient.HospitalList')->with('hosList', $hosList);
      
    }
    // public function search(){
    //     $search_text = $_GET['query'];
    //     $hospitals = Hospital::where('location','LIKE','%'.$search_text.'%')->get();
         
    //     return view('patient.search',compact('location'));

    // }
}
