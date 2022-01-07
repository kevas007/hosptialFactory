<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->belongsTo(Patient::class,'patients_id', 'register' );
    }
    public function consultations()
    {
        return $this->belongsTo(Consultation::class,'consultations_id' );
    }
    public function maladies()
    {
        return $this->belongsTo(Maladie::class,'maladies_id' );
    }
    public function diagnostique()
    {
        return $this->belongsTo(Dignostique::class,'dignostiques_id' );
    }
}
