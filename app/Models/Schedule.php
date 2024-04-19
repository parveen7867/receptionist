<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable=[
      
      'Day',
      'StartTime',
      'EndTime',
      'PerPatientTime',
      'SerialVisibility',
      'Status',
      'doctor_id',
    ];
    public function doctor (){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
