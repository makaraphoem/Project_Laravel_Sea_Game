<?php

use App\Http\Controllers\EventControll;
use App\Http\Controllers\EventTeamController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/users', EventControll::class);
Route::resource('/events', UserController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/eventteams', EventTeamController::class);
Route::resource('/tickets', TicketController::class);
