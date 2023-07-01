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

// topページ
Route::get('/', [SpritTheBill::class, 'showTop'])->name('top');
// 保存
Route::post('/add', [SpritTheBill::class, 'exeStore'])->name('store');
// 削除
Route::post('/delete/{id}', [SpritTheBill::class, 'exeDelete'])->name('delete');
// 内容入力ページへ遷移
Route::get('/amount/{id}', [SpritTheBill::class, 'showAmount'])->name('amount');
// 内容追加
Route::get('/amount/add/{name}', [SpritTheBill::class, 'exeAdd'])->name('add');
// 内容削除
Route::post('/amount/delete/{id}', [SpritTheBill::class, 'exeDeleteContent'])->name('deleteContent');
// 内容保存処理
Route::post('/amount/update', [SpritTheBill::class, 'exeContentStore'])->name('contentStore');
// 集計画面
Route::get('/totaling', [SpritTheBill::class, 'showTotaling'])->name('showTotaling');