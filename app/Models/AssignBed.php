<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignBed extends Model
{
    use HasFactory;
    protected $fillable=[
      
        'Patient_id',
        'block_id',
        'floor_id',
        'bedd_id',
    ];

    public function Patient(){
        return $this->belongsTo(Patient::class,'Patient_id');
    }
    public function floor (){
        return $this->belongsTo(Floor::class,'floor_id');
    }

    public function block (){
        return $this->belongsTo(Block::class,'block_id');
    }
    public function bedd (){
        return $this->belongsTo(Bedd::class,'bedd_id');
    }
}
