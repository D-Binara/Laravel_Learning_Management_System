<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::group(['middleware' => ['auth', 'admin:admin']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'indexAdmin'])->name('admin');
    Route::get('/addSubject', [App\Http\Controllers\AddSubjectController::class, 'addSubject'])->name('addSubject');
    Route::post('/addSubjectToDB',[App\Http\Controllers\AddSubjectController::class,'addSubjectToDB'])->name('addSubjectToDB');
});

Route::group(['middleware' => ['auth', 'user:admin']], function () {
    Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'calendar'])->name('calender');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'dashboard'])->name('dashboard');

});




