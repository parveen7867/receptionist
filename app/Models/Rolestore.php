<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolestore extends Model
{
    use HasFactory;
    protected $fillable=[
        'role',
           ];
           public function roll (){
            return $this->belongsTo(Roll::class,'roll_id');
        } 
}
