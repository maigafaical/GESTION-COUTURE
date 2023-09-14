<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Client;
use App\Models\Modele;
use App\Models\User;
use App\Models\Paiements;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coutures extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'date_depot',
        'date_recuperation',
        'modeles_id',
        'clients_id',
       
];
function Client(){
    return $this->belongsTo(Clients::class, 'clients_id');
}

function Modele(){
    return $this->belongsTo(Modeles::class, 'modeles_id');
}

function Paiement(){
    return $this->hasOne(Paiements::class);
}

function User(){
    return $this->belongsTo(User::class, 'users_id');
   } 


}
