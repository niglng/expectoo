<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowListController;

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

Route::get('/', [ShowListController::class, 'index']);
Route::get('/page/{page}', [ShowListController::class, 'indexPages'])->name('nextpage');
Route::get('/character/detail/{actorId}', [ShowListController::class, 'characterDetail'])->name('actorDetail');
Route::get('/dashboard', [ShowListController::class, 'dashBoard'])->name('dashBoard');



