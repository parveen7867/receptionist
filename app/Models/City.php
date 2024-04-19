<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable=[
      
        'cityName',
        'region_id',
        'country_id',
    ];
    public function region (){
        return $this->belongsTo(Floor::class,'region_id');
    }

    public function country (){
        return $this->belongsTo(country::class,'country_id');
    }

}
