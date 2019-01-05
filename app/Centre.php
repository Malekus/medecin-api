<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    protected $hidden = ['pivot'];

    public function type(){
        return $this->belongsTo(Configuration::class);
    }

    public function medecins(){
        return $this->hasMany(Medecin::class, 'id');
    }

    public function patients(){
        return $this->belongsToMany(Patient::class)->select(['centre_patient.id', 'nom', 'prenom', 'numsecu', 'adresse', 'tel']);
    }

}
