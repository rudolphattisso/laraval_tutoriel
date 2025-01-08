<?php

use App\Http\Controllers\ParcelController;
use App\Models\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

//routage de la logique du controller  avce la classe ParcelController
Route::get('/', [ParcelController::class, 'home_index']);

Route::get('/register', [ParcelController::class, 'register_index']);



Route::post('/register', [ParcelController::class,'register_new_parcel']);