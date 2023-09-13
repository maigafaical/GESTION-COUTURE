<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modeles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_modele',
        'type_modele',
        'image',
      
];

public function coutures(): HasMany
{
    return $this->hasMany(Coutures::class);
}

}
