<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Medicament extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom->label,
            'type' => $this->type->label ?? '',
            'consultations' => $this->consultations,
        ];
    }
}
