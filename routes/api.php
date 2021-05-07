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
//Create new user
Route::post('/register',[UserController::class,'register']);
// Read 
Route::get('/users/all',[UserController::class, 'index']);
// Update User
Route::post('/user/{id}/update',[UserController::class,'update']);
// Delete User
Route::get('/user/{id}/delete',[UserController::class,'destroy']);
// Team CRUD
// This is for register page 
Route::get('/team/all',[TeamController::class, 'index']);
// Player CRUD
// This is for register page 
Route::get('/player/all',[PlayerController::class,'index']);




Route::get('/stats/player/regular/{column}', [DataController:: class, 'statstotal']);



// ================================ General ======================================================================
Route::get('/stats/regular/{id}',[DataController::class,'playerregularseasontotals']);
// Get postseason average
Route::get('/stats/postseason-averages',[DataController::class, 'postseasonaverages']);
// Get postseason total
Route::get('/stats/postseason-totals',[DataController::class, 'postseasontotals']);
// Get regular season averages 
Route::get('/stats/regular-season-averages',[DataController::class, 'regularseasonaverages']);
// Get regular season totals
Route::get('/stats/regularseasontotals',[DataController::class, 'regularseasontotals']);
// ===============================================================================================================


//======================================LEBRON======================================================
// Regular season average 
Route::get('/stats/lebron-regular-season-averages',[DataController::class, 'lebronsregularseasonaverages']);
// Regular season total 
Route::get('/stats/lebron-regular-season-totals',[DataController::class, 'lebronsregularseasontotals']);
// Postseason average
Route::get('/stats/lebron-postseason-averages', [DataController::class,'lebronpostseasonaverages']);
// Postseason total
Route::get('/stats/lebron-postseason-totals', [DataController::class,'lebronpostseasontotals']);
// =================================================================================================


// ==========================================KOBE===================================================
// Regular season average 
Route::get('/stats/kobe-regular-season-averages',[DataController::class, 'koberegularseasonaverages']);
// Regular season total 
Route::get('/stats/kobe-regular-season-totals',[DataController::class, 'koberegularseasontotals']);
// Postseason average
Route::get('/stats/kobe-postseason-averages', [DataController::class,'kobepostseasonaverages']);
// Postseason total
Route::get('/stats/kobe-postseason-totals', [DataController::class,'kobepostseasontotals']);
// ==================================================================================================



// ===========================================MICHEAL==============================================
// Regular season average 
Route::get('/stats/micheal-regular-season-averages',[DataController::class, 'michealregularseasonaverages']);
// Regular season total 
Route::get('/stats/micheal-regular-season-totals',[DataController::class, 'michealregularseasontotals']);
// Postseason average
Route::get('/stats/micheal-postseason-averages', [DataController::class,'michealpostseasonaverages']);
// Postseason total
Route::get('/stats/micheal-postseason-totals', [DataController::class,'michealpostseasontotals']);
// ==================================================================================================





