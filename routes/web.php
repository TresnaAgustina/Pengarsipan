<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BsiController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\MenuArsipController;
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
      // [route untuk menampilkan data Dokumen]
      Route::get('/viewDok', 'index')->middleware('auth');
      // [route untuk menampilkan halaman input]
      Route::get('/insertDok', 'input')->middleware('auth');
      // [route untuk input data]
      Route::post('/insertDok', 'store')->middleware('auth');
      
      // [route untuk menampilak halaman edit]
      Route::get('/editDok/{id}', 'edit')->middleware('auth');
      // [route untuk edit data]
      Route::post('/editDok/{id}', 'update')->middleware('auth');

      // [route untuk delete data]
      Route::get('/deleteDok/{id}', 'delete')->middleware('auth');
});


//  ===== Route untuk menu BSI [insert,update,delete] ===== //
Route::controller(BsiController::class)->group(function () {
      // [route untuk menampilkan halaman input]
      Route::get('/viewBsi', 'index')->middleware('auth');
      // [route untuk input data]
      Route::post('/insertBsi', 'store')->middleware('auth');
      
      // [route untuk menampilak halaman edit]
      Route::get('/editBsi/{id}', 'edit')->middleware('auth');
      // [route untuk edit data]
      Route::post('/editBsi/{id}', 'update')->middleware('auth');

      // [route untuk delete data]
      Route::get('/deleteBsi/{id}', 'delete')->middleware('auth');
});


