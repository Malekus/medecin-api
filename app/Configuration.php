<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{

    protected $fillable = ['categorie', 'type', 'label'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {

            foreach ($model->attributes as $key => $attribute) {
                $model->$key = ucfirst(mb_strtolower($attribute, 'UTF-8'));
            }
        });

    }

    public function diplomes(){
        return $this->hasMany('App\Medecin', 'id');
    }

    public function specialites(){
        return $this->hasMany('App\Medecin', 'id');
    }
}
