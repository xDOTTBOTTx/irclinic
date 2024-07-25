<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Equipment;
use App\Models\Hospital;
use App\Models\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashdata(Request $req){
        $operations = Operation::all();
        $operationcounts = Operation::all()->count();
        $doctorcounts = Doctor::all()->count();
        $equipmentcounts =Equipment::all()->count();
        $hospitalcounts= Hospital::all()->count();
        //
        $collection=Operation::sum("charge");
        //
        $equipmenttoday=Equipment::whereDate('created_at', \Carbon\Carbon::today())->get()->count();
        
        return  view('dashboard',compact('operations','operationcounts','doctorcounts','equipmentcounts','hospitalcounts','collection','equipmenttoday'));
    }

    public function deleteop(Request $req){
        $operations = operation::find($req->id);
        $operations->delete();
        return redirect()->back();
    }

    ///////////////////////////////new doctor dashboard/////////////////////////////////////////////////////
    public function front(Request $req){
    
        return view('/front');
    }

    public function docdash(){
        return view('/dashboard1');
    }

    public function transaction(){
        return view('/transactions');
    }

    public function tradetail(){
        return view('transactiondetail');
    }

    public function newopration(){
        return view('newoperation');
    }
}
