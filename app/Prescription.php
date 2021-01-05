<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
