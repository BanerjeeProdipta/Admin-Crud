<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
}
