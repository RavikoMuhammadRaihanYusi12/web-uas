<?php

use App\Http\Controllers\PembeliController;
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
Route::get('/home', function (){
    return view('home');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/lainnya', function (){
    return view('lainnya');
});

Route::get('/pembeli',[PembeliController::class, 'index']);
Route::get('/pembeli/create',[PembeliController::class, 'create']);
Route::post('/pembeli/shop',[PembeliController::class, 'shop']);
Route::get('/pembeli/{id}/edit',[PembeliController::class,'edit']);
Route::put('/pembeli/{id}',[PembeliController::class,'update']);
Route::delete('/pembeli/{id}',[PembeliController::class,'delete']);

