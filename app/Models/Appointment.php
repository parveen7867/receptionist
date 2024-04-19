<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable=[

         'patient_id',
        'appointmentdate',
        'problem',
        'status',
        'doctor_id',

    ];

    public function doctor (){
        return $this->belongsTo(Doctor::class);
    }
    public function  patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }
         /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected $table = 'patients';
} 
function user()
{
    return $this->belongsTo(User::class);
}