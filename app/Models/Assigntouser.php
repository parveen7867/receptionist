<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigntouser extends Model
{
    use HasFactory;
    protected $fillable=[
        'permission_id',
        'user_id',
    ];

public function permission(){
    return $this->belongsTo(Permission::class,'permission_id');
}
public function user(){
    return $this->belongsTo(User::class,'user_id');
}
}