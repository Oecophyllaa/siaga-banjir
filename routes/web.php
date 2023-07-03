<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MQTTController as AdminMQTTController;
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

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
	Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
	Route::get('/mqtt/subs', [AdminMQTTController::class, 'subs'])->name('mqtt.subs');
	Route::post('/mqtt/pubs', [AdminMQTTController::class, 'ping'])->name('mqtt.ping');
});