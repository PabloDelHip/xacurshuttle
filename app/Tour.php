<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);

    }

}
