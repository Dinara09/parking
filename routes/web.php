<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientController;
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
// Action-синтаксис (не забудьте импортировать класс контроллера)
use App\Http\Controllers\MainController;
Route::get('/', [ MainController::class, 'home' ])->name('home');
Route::get('/create', [ MainController::class, 'create'])->name('create');
Route::post('/create/addClient', [ ClientController::class, 'createAddClient' ]);
Route::post('/edit/saveChanges/{id}', [ ClientController::class, 'editSaveChanges' ]);
Route::get('/edit/{id}', [ ClientController::class, 'edit' ])->name('edit');
Route::get('/delete/{id}', [ MainController::class, 'delete' ]);
Route::get('/parking', [ MainController::class, 'parking' ])->name('parking');;
Route::post('/parking/showClientCars', [ ClientController::class, 'parkingShowClientCars' ]);
Route::get('/parking/dropDown/{id}', [ CarController::class, 'dropDown' ]);
Route::post('/parking/saveChanges', [ CarController::class, 'parkingSaveChanges' ]);
