<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(Request $req){
        $equipments = Equipment::all();
        return  view('equipment/equipmentdata',compact('equipments'));
    }
    public function addequipment(){
        
        return  view('equipment/addequipment');
    }
    public function add(Request $req){
        $equipments = new equipment();
        $equipments->name = $req->name;
        $equipments->stocks = $req->stocks;
        $equipments->status = $req->status;
    

        $equipments->save();
        return redirect('equipmentdata');
    }
    public function deleteeq(Request $req){
        $equipments = Equipment::find($req->id);
        $equipments->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $equipments = equipment::find($req->id);
        return view('/equipments/editequipments')->with("equipments",$equipments);
    }
    public function update(Request $req){
        $equipments = equipment::find($req->id);
        $equipments->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile'=> $req->mobile,
            'specialities'=> $req->specialities,
            'status'=> $req->status,
        ]);
        return redirect('equipment/equipmentdata');
    }
}
