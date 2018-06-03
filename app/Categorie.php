<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }

    public function toursHome($num)
    {
        // if($this->role->name===$role)
        // {

        // }
        dd($this->tours());
        echo "Hola soy la riataaaaaaa";
    }
}
