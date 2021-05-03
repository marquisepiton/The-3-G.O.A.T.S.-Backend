<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Team;
use App\Models\Player;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\DataController;


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
Route::post('/register',[UserController::class,'register']);

// Read 
Route::get('/users/all',[UserController::class, 'index']);

// Update
Route::post('/user/{id}/update',[UserController::class,'update']);

// Delete
Route::get('/user/{id}/delete',[UserController::class,'destroy']);


// Team CRUD

// Read 
Route::get('/team/all',[TeamController::class, 'index']);


// Player CRUD
Route::get('/player/all',[PlayerController::class,'index']);

// Get postseason average
Route::get('/stats/post-season-averages',[DataController::class, 'postseasonaverages']);


// Get postseason total
Route::get('/stats/post-season-totals',[DataController::class, 'postseasontotals']);


// Get regular season averages 
Route::get('/stats/regular-season-averages',[DataController::class, 'regularseasonaverages']);

// Get regular season totals
Route::get('/stats/regular-season-totals',[DataController::class, 'regularseasontotals']);




