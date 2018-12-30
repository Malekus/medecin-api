<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{

    public function diplome(){
        return $this->belongsTo('App\Configuration');
    }

    public function specialite(){
        return $this->belongsTo('App\Configuration');
    }
}
