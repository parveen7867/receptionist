<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selectoption extends Model
{
    use HasFactory;
    protected $fillable=[
        'Patient_id',
        'selectoption',
       ];
       public function patient (){
        return $this->belongsTo(Patient::class,'Patient_id');
    }
}
