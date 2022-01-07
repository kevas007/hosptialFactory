<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;
    public function dossierMedical()
    {
        return $this->belongsTo(DossierMedical::class, 'dossier_medicals_id');
    }
}
