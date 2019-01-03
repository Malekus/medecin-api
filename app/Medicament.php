<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    public function nom(){
        return $this->belongsTo('App\Configuration');
    }

    public function type(){
        return $this->belongsTo('App\Configuration');
    }
}
