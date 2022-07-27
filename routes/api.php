<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Student route
Route::get('class',[SclassController::class,'Index']);
Route::post('class/store',[SclassController::class,'Store']);
Route::get('class/edit/{id}',[SclassController::class,'Edit']);
Route::put('class/update/{id}',[SclassController::class,'Update']);
Route::delete('class/delete/{id}',[SclassController::class,'Delete']);

// subject route
Route::get('subject',[SubjectController::class,'Index']);
Route::post('subject/store',[SubjectController::class,'Store']);
Route::get('subject/edit/{id}',[SubjectController::class,'SubEdit']);
Route::put('subject/update/{id}',[SubjectController::class,'SubUpdate']);
Route::delete('subject/delete/{id}',[SubjectController::class,'Delete']);

// section
Route::get('section',[SectionController::class,'Index']);
Route::post('section/store',[SectionController::class,'Store']);
Route::get('section/edit/{id}',[SectionController::class,'Edit']);
Route::put('section/update/{id}',[SectionController::class,'Update']);
Route::delete('section/delete/{id}',[SectionController::class,'Delete']);

//Student
Route::get('student',[StudentController::class,'Index']);
Route::post('student/store',[StudentController::class,'Store']);
Route::get('student/edit/{id}',[StudentController::class,'Edit']);
Route::put('student/update/{id}',[StudentController::class,'Update']);
Route::delete('student/delete/{id}',[StudentController::class,'Delete']);


