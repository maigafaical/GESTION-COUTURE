<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

