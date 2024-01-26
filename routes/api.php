<?php

use \App\Http\Controllers\ObjectiveController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GeneralActivityPoaController;
use App\Http\Controllers\SubActivityPoaController;
use App\Http\Controllers\ExtraPoaController;
use App\Http\Controllers\TypePoaController;




Route::apiResource('obj', ObjectiveController::class);

Route::apiResource('users', UserController::class);
Route::apiResource('poaG', GeneralActivityPoaController::class);
Route::apiResource('poaS', SubActivityPoaController::class);
Route::apiResource('poaE', ExtraPoaController::class);
Route::apiResource('poaT', TypePoaController::class);

