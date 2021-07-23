<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    //
    protected $table = 'pincode';
    // public $timestamps = false;

    protected $fillable = [

        'officename','pincode','officeType','Deliverystatus','divisionname','regionname','circlename','Taluk','Districtname','statename'

    ];

    protected $hidden = [];
}
