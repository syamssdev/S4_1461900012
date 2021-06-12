<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;

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

Route::get('/', [DokterController::class, 'index']);
Route::post("excel-import", [DokterController::class, 'import'])->name("dokter.import");

