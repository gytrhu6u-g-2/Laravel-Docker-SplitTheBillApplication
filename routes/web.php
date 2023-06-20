<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpritTheBill;

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

Route::get('/', [SpritTheBill::class, 'showTop'])->name('top');
// 保存
Route::post('/add', [SpritTheBill::class, 'exeStore'])->name('store');
// 削除
Route::post('/delete/{id}', [SpritTheBill::class, 'exeDelete'])->name('delete');