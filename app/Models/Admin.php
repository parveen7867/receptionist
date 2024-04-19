<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
    use HasFactory;



    protected $fillable = [
        'name',
        'email', 
        'password',
        
       
    ];
 
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['password'] = ''; 
    }
    public function getAuthIdentifierName()
    {
        return $this->getKeyName(); 
    }
    



    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return $this->rememberTokenName;
    }
/*
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
   protected $casts = [
       'email_verified_at' => 'datetime',
       'password' => 'hashed',
   ];
   protected $table = 'patients';
}

