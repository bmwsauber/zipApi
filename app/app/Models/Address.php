<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * @package App\Models
 */
class Address extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
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
