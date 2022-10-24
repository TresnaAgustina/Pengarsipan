<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuArsipController;
use App\Http\Controllers\RegisController;
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

// ===== Route untuk menampilkan Halaman ===== //
Route::controller(ViewController::class)->group(function () {
      // route untuk halaman Login via root
      Route::get('/', 'index');
      // route untuk halaman Login
      Route::get('/login', 'index')->name('login');
      // route untuk halaman Register
      Route::get('/regis', 'regisView');
      // route untuk halaman Dashoard
      Route::get('/dashboard', 'dashboard')
            ->middleware("auth");
      // route untuk fitur search
      Route::get('/dashboard/search', 'search');
});



//  ===== Route untuk login admin [login,logout] ===== //
Route::controller(LoginController::class)->group(function () {
      // [route untuk login]
      Route::post('/login', 'authenticate');
      // [route untuk logout]
      Route::post('/out', 'destroy');
});

//  ===== Route untuk register admin ===== //
Route::post('/regis', [RegisController::class, 'store']);


//  ===== Route untuk menu pengarsipan dokumen [insert,update,delete] ===== //
Route::controller(MenuArsipController::class)->group(function () {
      // [route untuk input data]
      Route::get('/insertDok', 'index')->middleware('auth');
      Route::post('/insertDok', 'store')->middleware('auth');
      
      // [route untuk edit data]
      Route::get('/editDok/{id}', 'edit')->middleware('auth');
      Route::post('/editDok/{id}', 'update')->middleware('auth');

      // [route untuk delete data]
      Route::get('/deleteDok/{id}', 'delete')->middleware('auth');
});