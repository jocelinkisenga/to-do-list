<?php
use \App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[TodoController::class,'index']);
Route::get('/ajout',[TodoController::class,'ajout']);
Route::post('/ajout',[TodoController::class,'creer']);

Route::get('delete/{id}',[TodoController::class,'delete']);
Route::get('editer/{id}',[TodoController::class,'editer']);
Route::post('editer/{id}',[TodoController::class,'edition'])->name('edition');