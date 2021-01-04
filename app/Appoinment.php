<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
