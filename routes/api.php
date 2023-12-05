<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("users",[UsersController::class,'getAll']);
Route::get("users/{id}",[UsersController::class,'getOne']);
Route::get("users/email/{email}",[UsersController::class,'getOneByEmail']);
Route::post("users",[UsersController::class,'create']);
Route::put("users/{id}",[UsersController::class,'update']);
Route::delete("users/{id}",[UsersController::class,'delete']);


