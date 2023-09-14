<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Clients;
use App\Models\Modeles;
use App\Models\Coutures;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiements extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'acompte',
        'reste',
        'mode_paiement',
        'coutures_id',
        
      
];

function Client(){
    return $this->belongsTo(Clients::class, 'clients_id');
   }

   function Modele(){
    return $this->belongsTo(Modeles::class, 'modeles_id');
}

function Couture(){
    return $this->belongsTo(Modeles::class, 'coutures_id');
}
}
