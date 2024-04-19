<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $fillable = ['blockName'];
    
    public function floor()
    {
        return $this->hasMany(Floor::class);
    }

}
