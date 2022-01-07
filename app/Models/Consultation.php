<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patients_id', 'register');
    }
    public function docteurs()
    {
        return $this->belongsTo(Docteur::class, 'docteurs_id');
    }
public function hopital(){
    return $this->belongsTo(HopitalLocal::class, 'hopital_locals_id');
}
public function statuts(){
    return $this->belongsTo(TypeConsultation::class, 'type_consultations_id');
}
public function  dossiermedicals(){
    return $this->hasOne(DossierMedical::class, 'consultations_id');
}

}
