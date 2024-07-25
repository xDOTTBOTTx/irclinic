<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index(Request $req){
        $operations = Operation::all();
        return  view('operation/operationdata',compact('operations'));
    }
    public function addoperation(){
        
        return  view('operation/addoperation');
    }
    public function add(Request $req){
        $operations = new operation();
        $operations->doctor = $req->doctor;
        $operations->hospital = $req->hospital;
        $operations->patient = $req->patient;
        $operations->charge = $req->charge;
        $operations->date = $req->date;

        $operations->save();
        return redirect('operationdata');
    }
    public function deleteop(Request $req){
        $operations = operation::find($req->id);
        $operations->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $operations = operation::find($req->id);
        return view('/operations/editoperations')->with("operations",$operations);
    }
    public function update(Request $req){
        $operations = operation::find($req->id);
        $operations->update([
            'name' => $req->name,
            'email' => $req->email,
            'mobile'=> $req->mobile,
            'specialities'=> $req->specialities,
            'status'=> $req->status,
        ]);
        return redirect('operation/operationdata');
    }
}
