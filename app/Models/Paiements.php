<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'acompte',
        'reste',
        'mode_paiement',
        'date_paiement',
];
}
