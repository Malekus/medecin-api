<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function medecin(){
        return $this->belongsTo(Medecin::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
