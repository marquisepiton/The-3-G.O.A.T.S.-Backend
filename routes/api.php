<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Team;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// User CRUD
//Create
Route::post('/register',[App\Http\Controllers\UserController::class,'register']);

// Read 
Route::get('/users/all',[App\Http\Controllers\UserController::class, 'index']);

// Update
Route::post('/user/{id}/update',[App\Http\Controllers\UserController::class,'update']);

// Delete
Route::get('/user/{id}/delete',[App\Http\Controllers\UserController::class,'destroy']);


// Team CRUD

// Read 
Route::get('/team/all',[App\Http\Controllers\TeamController::class, 'index']);