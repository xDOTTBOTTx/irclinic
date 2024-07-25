<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $req){
        $doctors = Doctor::all();
        return  view('doctor/doctordata',compact('doctors'));
    }

    public function adddoctor(){
        
        return  view('doctor/adddoctor');
    }
    public function add(Request $req){
        $doctors = new Doctor();
        $doctors->name = $req->name;
        $doctors->email = $req->email;
        $doctors->mobile = $req->mobile;
        $doctors->specialities = $req->specialities;
        $doctors->status = $req->status;

        $doctors->save();
        return redirect('doctordata');
    }
    public function delete(Request $req){
        $doctors = Doctor::find($req->id);
        $doctors->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $doctors = Doctor::find($req->id);
        return view('/doctors/editdoctors')->with("doctors",$doctors);
    }
    public function update(Request $req){
        $doctors = doctor::find($req->id);
        $doctors->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile'=> $req->mobile,
            'specialities'=> $req->specialities,
            'status'=> $req->status,
        ]);
        return redirect('doctor/doctordata');
    }
}
