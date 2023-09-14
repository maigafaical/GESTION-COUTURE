<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Clients;
use App\Models\Modeles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mesures extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'poitrine',
        'taille_robe',
        'bassins',
        'longueur',
        'genoux',
        'manches',
        'hanches',
        'epaules',
        'poignets',
        'tour_ventre',
        'longueur_veste',
        'date_',
        'clients_id',
];

function Client(){
    return $this->belongsTo(Clients::class, 'clients_id');
   }

   function Modele(){
    return $this->belongsTo(Modeles::class, 'modeles_id');
}
}



