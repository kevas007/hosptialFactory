<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    use HasFactory;
    public function hopital_locals()
    {
        return $this->hasMany(HopitalLocal::class, 'locals_id');
    }
}
