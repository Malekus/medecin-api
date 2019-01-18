<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationMedicament extends Model
{
    protected $table = 'consultation_medicament';

    protected $fillable = ['consultation_id', 'medicament_id'];

    public $timestamps = false;

}
