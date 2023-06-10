<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\ContactController;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;

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
// routes/api.php

Route::post('/save', [RendezvousController::class,'store']);
Route::get('/data',[RendezvousController::class,'index']);
Route::get('/data/{userId}',[RendezvousController::class,'getDataByUserId']);
Route::post('/contact',[ContactController::class,'store']);
Route::get('/datacontact',[ContactController::class,'index']);
// Route::resource('/datacontact',ContactController::class);
Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show']);


Route::get('/dashboard',[DashboardController::class,'index']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['auth:sanctum']], function(){
//     return $request->user();
// // Route::get('/dashboard',[DashboardController::class ,'index']);

// });

