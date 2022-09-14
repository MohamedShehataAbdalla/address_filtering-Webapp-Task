<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function country(){

        return $this->belongsTo(Country::class);

    }

    public function city(){

        return $this->belongsTo(City::class);

    }

    public function district(){

        return $this->belongsTo(District::class);

    }
}
