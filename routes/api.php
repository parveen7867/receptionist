<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DoctorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('students/index',[StudentController::class,'indexstudent']);
Route::get('students/',[StudentController::class,'__construct']);

Route::get('students/add',[StudentController::class,'addstudent']);
Route::post('students/store',[StudentController::class,'storestudent'])->name('students.store');
Route::get('students/{id}',[StudentController::class,'studentid']);
Route::get('students/edit/{id}',[StudentController::class,'studentedit']);
Route::put('students/edit/{id}',[StudentController::class,'studentupdate']);
Route::delete('students/delete/{id}',[StudentController::class,'studentdelete'])->name('student.delete');


