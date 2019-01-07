<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Centre extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => "Centre " . $this->nom,
            'type' => $this->type->label ?? '',
            'adresse' => $this->adresse,
            'patient' => $this->patients,
        ];
    }
}
