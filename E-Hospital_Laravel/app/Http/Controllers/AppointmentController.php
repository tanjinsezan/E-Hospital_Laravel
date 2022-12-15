<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends Controller
{
    public function BookApp(){
        return view('patient.BookApp');
    }
    public function BookAppSubmitted(Request $request){
        $validate = $request->validate([
            'id'=>'required',
            'pid'=>'required',
            'pname'=>'required',
            'age'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'dname'=>'required',
            'did'=>'required',
            'hid'=>'required',
            'hname'=>'required',
            
        ],
        [
            'hname.required'=>'Please put hospital name',
            
        ]
    );
        $app = new Appointment();
        $app->id = $request->id;
        $app->pname = $request->pname;
        $app->pid = $request->pid;
        $app->age = $request->age;
        $app->phone = $request->phone;
        $app->dname = $request->dname;
        $app->did = $request->did;
        $app->hname = $request->hname;
        $app->hid = $request->hid;
        
        $app->save();
        return redirect()->route('Dash');
    }
    public function AppList()
    {
        $appList = Appointment::all(); 
        $appList = Appointment::paginate(3);
        return Appointment::all();
        //return view('patient.CheckApp')->with('appList', $appList);
      
    }
    public function AppDelete(Request $request){
        $ap_del = Appointment::where('id', $request->id)->first();
        $ap_del->delete();

        return redirect()->route('Dash');
    }

}
