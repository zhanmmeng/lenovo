<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']],function (){
    Route::get('student/index',[StudentController::class,'index']);
    Route::any('student/create',[StudentController::class,'create']);
    Route::any('student/save',[StudentController::class,'save']);
    Route::any('student/update/{id}',[StudentController::class,'update']);
    Route::any('student/detail/{id}',[StudentController::class,'detail']);
    Route::any('student/delete/{id}',[StudentController::class,'delete']);
});
