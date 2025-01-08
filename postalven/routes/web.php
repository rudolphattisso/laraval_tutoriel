<?php

use App\Models\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 $nbParcel = 3;
  
    return view('welcome' , ['nbParcel' => $nbParcel]);
});

Route::get('/register', function(){
    return view('register');
});

// <!-- dd = die and dump; affichage des données du formulaire en Brut -->
// Dans en paramètre de fonction il faudra choisir Request/ de cet import : Illuminate\Http\Request;
Route::post('/register', function(Request $request){

    $message = 'colis enregistré';

    //insertion dans la bdd
    $parcels = Parcel::create([
        'adresse_arr' => $request->adresse_arr,
        'adresse_dep' => $request->adresse_dep,
        'poids' => $request->poids

    ]);

    return view('register',compact('message') );
});