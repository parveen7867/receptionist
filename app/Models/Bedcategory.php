<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedcategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'bedcategory',
        'bedcount',
        'bedno',
        'description',
        'status',
    ];
}
