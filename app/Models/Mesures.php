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
        'dos',
        'genoux',
        'manches',
        'hanches',
        'cuisses',
        'cou',
        'epaules',
        'poignets',
        'tour_ventre',
        'demi_ourlet',
        'entrejambe',
        'longueur_veste',
        'longueur_pantalon',
        'longueur_gilet',
        'mollet',
        'coude',
        'date',
];
}
