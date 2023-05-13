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

Route::get("/users", [UserController::class, "index"]);
Route::post("/users", [UserController::class, "store"]);
Route::get("/users/{id}", [UserController::class, "show"]);
Route::put("/users/{id}", [UserController::class, "update"]);
Route::delete("/users/{id}", [UserController::class, "destroy"]);

Route::get("/events", [EventControll::class, "index"]);
Route::post("/events", [EventControll::class, "store"]);
Route::get("/events/{id}", [EventControll::class, "show"]);
Route::put("/events/{id}", [EventControll::class, "update"]);
Route::delete("/events/{id}", [EventControll::class, "destroy"]);

Route::get("/teams", [TeamController::class, "index"]);
Route::post("/teams", [TeamController::class, "store"]);
Route::get("/teams/{id}", [TeamController::class, "show"]);
Route::put("/teams/{id}", [TeamController::class, "update"]);
Route::delete("/teams/{id}", [TeamController::class, "destroy"]);

Route::get("/eventteams", [EventTeamController::class, "index"]);
Route::post("/eventteams", [EventTeamController::class, "store"]);
Route::get("/eventteams/{id}", [EventTeamController::class, "show"]);
Route::put("/eventteams/{id}", [EventTeamController::class, "update"]);
Route::delete("/eventteams/{id}", [EventTeamController::class, "destroy"]);

Route::get("/tickets", [TicketController::class, "index"]);
Route::post("/tickets", [TicketController::class, "store"]);
Route::get("/tickets/{id}", [TicketController::class, "show"]);
Route::put("/tickets/{id}", [TicketController::class, "update"]);
Route::delete("/tickets/{id}", [TicketController::class, "destroy"]);
