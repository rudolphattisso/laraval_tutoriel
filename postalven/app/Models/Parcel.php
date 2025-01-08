<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    // cet import est obligatoire
    use HasFactory;

    //Définir l'accessibilité
        protected $fillable = [
            'adresse_arr',
            'adresse_dep',
            'poids'];
        
}
