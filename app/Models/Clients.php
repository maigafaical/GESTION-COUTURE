<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mesures;
use App\Models\Coutures;
use App\Models\Paiements;
use App\Models\Rendezvous;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
];

function Couture(){
    return $this->HasOne(Coutures::class);
}
function Mesure(){
    return $this->HasOne(Mesures::class);   
}

function Paiements(){
    return $this->HasOne(Paiements::class);   
}

function Rendezvous(){
    return $this->HasOne(Rendezvous::class);   
}
}
