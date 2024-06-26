<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;


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
Route::get('equipments/export', [EquipmentController::class, 'exportToExcel'])->name('equipments-export');
Route::resource('equipments', EquipmentController::class);

