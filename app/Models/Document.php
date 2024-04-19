<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable=[
        
        'patientid',
        'file',
        'documenttitle',
        'doctor_id',

      ];
      public function doctor (){
          return $this->belongsTo(Doctor::class,'doctor_id');
      }
    use HasFactory;
}
