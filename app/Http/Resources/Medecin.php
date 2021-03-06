<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Medecin extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'diplome' => $this->diplome->label ?? '',
            'specialite' => $this->specialite->label ?? '',
            'centre' => $this->centre,
            'consultations' => $this->consultations,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
