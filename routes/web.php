<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/user', [PostController::class, 'index']);
Route::get('/usercreate', [PostController::class, 'create']);
Route::get('/userupdate', [PostController::class, 'update']);
Route::get('/userdelete', [PostController::class, 'delete']);

Route::get('/home', [PostController::class, 'add1']);


