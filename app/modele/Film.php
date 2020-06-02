<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $timestamps = false;

    public function categorie ()
    {
        return $this->belongsTo(Categorie::class);
    }
}
