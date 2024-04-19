<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedd extends Model
{
    use HasFactory;
    protected $fillable=[
      
        'bedsName',
        'block_id',
        'floor_id',
        'bedd_id',
    ];
    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id');
    }
    

    public function block (){
        return $this->belongsTo(Block::class,'block_id');
    }

 
}
