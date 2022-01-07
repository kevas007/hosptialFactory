<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopitalLocal extends Model
{
    use HasFactory;
    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'hopital_locals_id');
    }
    public function locals()
    {
        return $this->belongsTo(Local::class, 'locals_id');
    }
}
