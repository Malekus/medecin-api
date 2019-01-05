<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $hidden = ['pivot'];

    public function nom(){
        return $this->belongsTo('App\Configuration');
    }

    public function type(){
        return $this->belongsTo('App\Configuration');
    }

    public function consultations(){
        return $this->belongsToMany(Consultation::class)->select(['consultation_medicament.id', 'medecin_id', 'patient_id', 'consultation_id']);
    }
}
