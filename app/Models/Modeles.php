<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coutures;

class Modeles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_modele',
        'type_modele',
        'image',
      
];

function Coutures(){
    return $this->HasOne(Coutures::class, 'modeles_id');
}

function Mesure(){
    return $this->HasOne(Mesures::class);
}

function Paiements(){
    return $this->HasOne(Paiements::class);   
}


}
