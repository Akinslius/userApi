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
   return view('user');
 });
// Route::get('/users', [UserController::class, 'getUsers']);

//Route::get('/users', [UserController::class, 'getUsers']);
// Route::post('/user/create', [UserController::class, "register"]);
// Route::middleware('api-session')->get('/user/login', [UserController::class, 'login']);
// Route::put('/user/update/{id}', [UserController::class, 'updateUser']);
// Route::get('/user/delete/{id}', [UserController::class, 'delete']);
// Route::get('/user/{id}', [UserController::class, 'getUser']);

