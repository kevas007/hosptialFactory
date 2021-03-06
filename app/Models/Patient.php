<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'patients_id', 'register');
    }
    public function dossiermedicals()
    {
        return $this->hasMany(DossierMedical::class, 'patients_id', 'register');
    }
}
