<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $hidden = ['pivot'];

    public function medecin(){
        return $this->belongsTo(Medecin::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function medicaments(){
        return $this->belongsToMany(Medicament::class)->select(['consultation_medicament.id', 'nom_id', 'type_id', 'medicament_id']);
    }

    public function type(){
        return $this->belongsTo(Configuration::class);
    }

}
