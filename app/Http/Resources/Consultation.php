<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Consultation extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'medecin' => $this->medecin,
            'patient' => $this->patient,
            'medicaments' => $this->medicaments,
        ];
    }
}
