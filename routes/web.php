<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona', function () {
    return view('personas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post("/store", [App\Http\Controllers\PersonaController::class, 'store'])->name('store');
Route::get("/show", [App\Http\Controllers\PersonaController::class, 'show'])->name('show');
Route::delete("/{id}", [App\Http\Controllers\PersonaController::class, 'destroy'])->name("destroy");




// Route::group(['middleware' => 'auth'], function(){       //autenticación para acceder a esta ruta
//     Route::get('/persona', function(){
//         return view('personas');
//     });
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
