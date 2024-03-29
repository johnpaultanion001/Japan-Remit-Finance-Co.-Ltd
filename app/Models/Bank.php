<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes , HasFactory;

    protected $fillable = [
        'name',
        'display_name',
        'address',
        'status',
        'province_code',
        'city_municipality_code',
        'lat',
        'lng',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code' , 'province_code');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_municipality_code' , 'city_municipality_code');
    }
}
