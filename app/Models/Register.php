<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
       
    ];


public function hasRole($role)
{
    return $this->roles->contains('role', $role);
}

}
