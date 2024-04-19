<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDocument extends Model
{
    use HasFactory;
    protected $fillable=[
      'doctor_id',
      'patientid',
      'file',
      'documenttitile',
    ];
    public function doctor (){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
