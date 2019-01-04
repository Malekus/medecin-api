<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function consultations(){
        return $this->hasMany(Consultation::class, 'id');
    }
}
