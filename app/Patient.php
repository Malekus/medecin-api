<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $hidden = ['pivot'];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'patient_id')
            ->join('medecins', 'medecins.id', '=', 'consultations.medecin_id') // 'medecins.nom, medecins.prenom'
            ->join('configurations', 'configurations.id', '=', 'consultations.type_id')
            ->select(['configurations.*', 'medecins.*', 'consultations.id as idConsultation']);
    }

    public function centres()
    {
        return $this->belongsToMany(Centre::class)->join('configurations', 'configurations.id', '=','centres.type_id')
            ->select(['centre_patient.id', 'nom', 'configurations.label', 'adresse', 'centre_patient.centre_id as centre_id']);
    }

    public function medicaments()
    {
        return $this->hasManyThrough(
            ConsultationMedicament::class,
            Consultation::class,
            'patient_id',
            'consultation_id',
            'id',
            'id')
            ->join('medicaments', 'medicaments.id', '=', 'consultation_medicament.medicament_id')
            ->join('configurations', function($join){
                $join->on('medicaments.nom_id', '=', 'configurations.id')
                    ->orOn('medicaments.type_id', '=', 'configurations.id');
            })
            ->select(['configurations.*', 'consultations.id as idConsultation', 'medicaments.id as idMedicament']);
    }
}
