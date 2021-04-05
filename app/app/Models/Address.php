<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false;

    public $fillable = [
        'zip',
        'city',
        'lat',
        'lng',
        'state_id',
        'state_name',
        'zcta',
        'parent_zcta',
        'population',
        'density',
        'county_fips',
        'county_name',
        'county_weights',
        'county_names_all',
        'county_fips_all',
        'imprecise',
        'military',
        'timezone',
    ];
}
