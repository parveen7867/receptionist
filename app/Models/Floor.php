<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable = ['floorName', 'block_id'];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }
    public function bedds()
    {
        return $this->hasMany(Bedd::class);
    }
}
