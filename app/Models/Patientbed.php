<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientbed extends Model
{
    use HasFactory;
    protected $fillable=[
    
        'Patient_id',
      ];

    public function Patient (){
        return $this->belongsTo(Patient::class,'Patient_id');
    }
}

