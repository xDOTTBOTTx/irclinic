<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/doctordata', [DoctorController::class, 'index']);
Route::get('/adddoctor', [DoctorController::class,'adddoctor']);
Route::post('/adddoctor', [DoctorController::class, 'add']);
Route::get('/deletedo/{id}', [DoctorController::class, 'delete']);
// Route::get('/editdoctor/{id}', [DoctorController::class, 'edit']);
// Route::post('/editdoctor/{id}', [DoctorController::class, 'update']);

/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/equipmentdata', [EquipmentController::class, 'index']);
Route::get('/addequipment', [EquipmentController::class,'addequipment']);
Route::post('/addequipment', [EquipmentController::class, 'add']);
Route::get('/deleteeq/{id}', [EquipmentController::class, 'deleteeq']);
/////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/hospitaldata', [HospitalController::class, 'index']);
Route::get('/addhospital', [HospitalController::class,'addhospital']);
Route::post('/addhospital', [HospitalController::class, 'add']);
Route::get('/deleteho/{id}', [HospitalController::class, 'deleteho']);
/////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/operationdata', [OperationController::class, 'index']);
Route::get('/addoperation', [OperationController::class,'addoperation']);
Route::post('/addoperation', [OperationController::class, 'add']);
Route::get('/deleteop/{id}', [OperationController::class, 'deleteop']);

/////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/dashboard', [DashboardController::class,'dashdata'])->name('dashboard');
Route::get('/deleteop/{id}', [DashboardController::class, 'deleteop']);
// Route::get('/dashboard', [DashboardController::class,'counts']);\

Route::get('/front', [DashboardController::class,'front']);
Route::get('/doctor/dashboard', [DashboardController::class,'docdash']);

Route::get('/doctor/transactions', [DashboardController::class,'transaction']);

Route::get('/doctor/transactiondetail', [DashboardController::class,'tradetail']);

Route::get('/doctor/newoperation', [DashboardController::class,'newopration']);
