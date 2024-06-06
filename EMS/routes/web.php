<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// add employee

Route::get('/addemployee',[App\Http\Controllers\EmployeeController::class,'addemployee']);

Route::post('/employeeadd', [App\Http\Controllers\EmployeeController::class,'employeeadd']);

// view data

//Route::get('/index',[App\Http\Controllers\EmployeeController::class,'records']);

Route::get('/editemployee/{id}',[App\Http\Controllers\EmployeeController::class,'editemployee']);

Route::post('/updateemployee/{id}',[App\Http\Controllers\EmployeeController::class,'updateemployee']);

Route::get('/deleteemployee/{id}',[App\Http\Controllers\EmployeeController::class,'deleteemployee']);

// Occupation .......................

Route::get('/add_occupation',[App\Http\Controllers\OccupationController::class,'add_occupation']);

Route::post('/occupation',[App\Http\Controllers\OccupationController::class,'occupation']);

Route::get('/view_occupation',[App\Http\Controllers\OccupationController::class,'view_occupation']);

Route::get('/delete_occupation/{id}',[App\Http\Controllers\OccupationController::class,'delete_occupation']);

Route::get('/edit_occupation/{id}',[App\Http\Controllers\OccupationController::class,'edit_occupation']);

Route::post('/update_occupation/{id}',[App\Http\Controllers\OccupationController::class,'update_occupation']);


