<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function country(){

        return $this->belongsTo(Country::class);

    }

    public function city(){

        return $this->belongsTo(City::class);

    }

    public function locations(){

        return $this->hasMany(Location::class);

    }
}
