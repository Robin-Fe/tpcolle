<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $timestamps = false;

    public function films ()
    {
        return $this->hasMany(Film::class);
    }

}
