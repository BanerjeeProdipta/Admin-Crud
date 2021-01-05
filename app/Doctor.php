<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appoinment::class);
    }

    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }
}
