<?php
  namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Authenticatable
{
  

    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'Picture',
        'FirstName',
        'LastName',
        'email',
        'password',
        'Sex',
        'Bloodgroup',
        'DateofBirth',
        'Status',
        'user_id',
    ];
    
    function user()
    {
        return $this->belongsTo(User::class);
    }
             /**
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
   
    function getAuthIdentifierName()
    {
        return 'id';
    }

   function getAuthIdentifier()
    {
        return $this->getKey();
    }

    function getAuthPassword()
    {
        return $this->password;
    }

 function getRememberToken()
    {
        return $this->remember_token;
    }

 function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

 function getRememberTokenName()
    {
        return 'remember_token';
    }

{
     function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

    
    