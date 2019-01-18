<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{

    public function diplome()
    {
        return $this->belongsTo(Configuration::class);
    }

    public function specialite()
    {
        return $this->belongsTo(Configuration::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'medecin_id');
    }

    public function centre()
    {
        return $this->belongsTo(Centre::class);
    }
}
