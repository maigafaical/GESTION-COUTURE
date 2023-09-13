<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coutures extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant',
        'date_depot',
        'date_recuperation',
       
];


public function clients(): BelongsTo
{
    return $this->belongsTo(Clients::class);
}

public function modeles(): BelongsTo
{
    return $this->belongsTo(Modeles::class);
}
}
