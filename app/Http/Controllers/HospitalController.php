<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(Request $req){
        $hospitals = Hospital::all();
        return  view('hospital/hospitaldata',compact('hospitals'));
    }
    public function addhospital(){
        
        return  view('hospital/addhospital');
    }
    public function add(Request $req){
        $hospitals = new hospital();
        $hospitals->name = $req->name;
        $hospitals->city = $req->city;
        $hospitals->status = $req->status;
    

        $hospitals->save();
        return redirect('hospitaldata');
    }
    public function deleteho(Request $req){
        $hospitals = hospital::find($req->id);
        $hospitals->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $hospitals = hospital::find($req->id);
        return view('/hospitals/edithospitals')->with("hospitals",$hospitals);
    }
    public function update(Request $req){
        $hospitals = hospital::find($req->id);
        $hospitals->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile'=> $req->mobile,
            'specialities'=> $req->specialities,
            'status'=> $req->status,
        ]);
        return redirect('hospital/hospitaldata');
    }
}
