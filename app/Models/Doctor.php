<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guard = 'doctor';
    use HasFactory;

    protected $fillable = [
        'Picture',
        'FirstName',
        'LastName',
        'Department',
        'EmailAddress',
        'Password',
        'Sex',
        'Contactnumber',
        'DateofBirth',
        'user_id',
    ];

    public function updatePicture($newPicturePath)
    {
        $this->Picture = $newPicturePath;
        return $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
