<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;


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

Route::get('/', [StaffController::class, 'home']);
Route::get('/create', [StaffController::class, 'create']);
Route::post('/stores', [StaffController::class, 'store']);
Route::get('/list', [StaffController::class, 'list']);
Route::get('/update/{id}', [StaffController::class, 'edit']);
Route::put('/update/{id}', [StaffController::class, 'update']);
Route::delete('/delete/{id}', [StaffController::class, 'destroy']);
