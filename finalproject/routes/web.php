<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Http\Controllers\EnrolledSubjectsController;
use App\Http\Controllers\GradesController;

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

Route::get('/addstudent', [StudentInfoController::class, 'index']);
Route::get('/addsubject', [EnrolledSubjectsController::class, 'index']);
Route::get('/addgrade', [GradesController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
