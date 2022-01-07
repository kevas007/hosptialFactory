<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dignostique extends Model
{
    use HasFactory;
    public function dossiermedical()
    {
        return $this->belongsTo(DossierMedical::class, 'dossier_medicals_id');
    }
}
