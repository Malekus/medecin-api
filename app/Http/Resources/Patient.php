<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Patient extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'numsecu' => $this->numsecu,
            'adresse' => $this->adresse,
            'tel' => $this->tel,
            'consultations' => $this->consultations,
            'medicaments' => $this->medicaments,
            'centres' => $this->centres,
            'cree' => $this->created_at,
            'maj' => $this->updated_at,
        ];
    }
}
