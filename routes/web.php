<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('contents.index');
});

Route::get('index', [UserController::class, 'index'])
    ->name('contents.index');

Route::post('create',[UserController::class, 'create'])
    ->name('contents.create');

Route::get('detail/{user}', [UserController::class, 'detail'])
    ->name('contents.detail')
    ->where('user', '[0-9]+');

Route::patch('update/{user}', [UserController::class, 'update'])
    ->name('contents.update')
    ->where('user', '[0-9]+');

//試行用
Route::get('practice', [UserController::class, 'practice']);
