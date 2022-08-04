<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/', function () {
//         return view('welcome');
//     });


Route::get('/users', [UserController::class, 'getUsers']);
Route::post('/user/create', [UserController::class, "register"]);
Route::middleware('api-session')->get('/user/login', [UserController::class, 'login']);
Route::put('/user/update/{id}', [UserController::class, 'updateUser']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
Route::get('/user/{id}', [UserController::class, 'getUser']);




Route::get('/log', [UserController::class, 'loginstatus']);
Route::get('/user/update/{id}', [UserController::class, 'update']);

