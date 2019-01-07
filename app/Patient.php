<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $hidden = ['pivot'];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'patient_id');//->select(['id', 'medecin_id']);
    }

    public function centres()
    {
        return $this->belongsToMany(Centre::class)->select(['centre_patient.id', 'nom', 'type_id', 'adresse']);
    }

    public function medicaments()
    {
        return $this->hasManyThrough(
            ConsultationMedicament::class,
            Consultation::class,
            'patient_id',
            'consultation_id',
            'id',
            'id');
    }
}
