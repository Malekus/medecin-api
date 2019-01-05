<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    public function type(){
        return $this->belongsTo(Configuration::class);
    }
}
