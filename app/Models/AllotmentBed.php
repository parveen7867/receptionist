<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllotmentBed extends Model
{
    use HasFactory;
    protected $fillable=[
        'Patient_id',
        'floor',
        'block',
        'beds',
    ];

public function Patient(){
    return $this->belongsTo(Patient::class,'Patient_id');
}

}
