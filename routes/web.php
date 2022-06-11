<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ShiftController;
use App\Models\Car;

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
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('postlogin', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboardadmin', 'App\Http\Controllers\UserController@indexadmin')->name('dashboardadmin');
Route::get('/dashboardmanager', 'App\Http\Controllers\UserController@indexmanager')->name('dashboardmanager');
Route::get('/dashboardcs', 'App\Http\Controllers\UserController@indexcs')->name('dashboardcs');
Route::get('/dashboardcustomer', 'App\Http\Controllers\UserController@indexcustomer')->name('dashboardcustomer');

Route::get('searchcar', 'App\Http\Controllers\CarController@search')->name('searchcar');
Route::get('searchmitra', 'App\Http\Controllers\MitraController@search')->name('searchmitra');
Route::get('searchemployee', 'App\Http\Controllers\EmployeeController@search')->name('searchemployee');
Route::get('searchdriver', 'App\Http\Controllers\DriverController@search')->name('searchdriver');
Route::get('searchtransaction', 'App\Http\Controllers\TransactionController@search')->name('searchtransaction');
Route::get('searchpromo', 'App\Http\Controllers\PromoController@search')->name('searchpromo');

Route::resource('users', UserController::class);
Route::resource('drivers', DriverController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('cars', CarController::class);
Route::resource('mitras', MitraController::class);
Route::resource('promos', PromoController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('shifts', ShiftController::class);

