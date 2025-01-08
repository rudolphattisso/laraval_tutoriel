<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//pour simplifier la gestion des routes

class ParcelController extends Controller
{


    public function home_index()
    {

        $parcels = Parcel::all();
        $nbParcel = count($parcels);

        return view('welcome', ['nbParcel' => $nbParcel]);
    }

    public function register_index()
    {
        return view('register');
    }

    public function register_new_parcel(Request $request)
    {
        //création du numéro de suivi 
        $trackingNumber = rand(100000000, 999999999);


        $message = "colis enregistré! numéro de suivi : $trackingNumber" ;

        // création de lavalidation des données rentrées en BDD(Illuminate\Support\Facades\Validator)
        $validator = Validator::make($request->all(), [
            'adresse_arr' => 'required|string|max:255',
            'adresse_dep' => 'required|string|max:255',
            'poids' => 'required|numeric|min:1'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //insertion dans la bdd grace au model et $request
        // Dans en paramètre de fonction il faudra choisir Request/ de cet import : Illuminate\Http\Request;
        $parcels = Parcel::create([
            //recupérer données issues du formulaires
            'adresse_arr' => $request->adresse_arr,
            'adresse_dep' => $request->adresse_dep,
            'poids' => $request->poids,
            //variable interne $trackingNumber
            'tracking_number'=>$trackingNumber

        ]);

        return view('register', compact('message'));
    }
}
