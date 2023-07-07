<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDcontroller;

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

// Route::view('/','insert');
Route::post('insertData',[CRUDcontroller::class,'insert']);
Route::get('/',[CRUDcontroller::class,'readdata']);
// Route::view('update','update');
Route::get('update',[CRUDcontroller::class,'update']);
Route::get('editdata',[CRUDcontroller::class,'edit']);

?>