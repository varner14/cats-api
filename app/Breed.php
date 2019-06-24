<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = ['cat_id ',
        'name',
        'temperament',
        'life_span',
        'alt_names',
        'wikipedia_url',
        'origin',
        'experimental',
        'hairless',
        'natural',
        'rare',
        'rex',
        'supress_tail',
        'short_legs',
        'hypoallergenic',
        'adaptability',
        'affection_level',
        'country_code',
        'child_friendly',
        'dog_friendly',
        'energy_level',
        'grooming',
        'health_issues',
        'intelligence',
        'shedding_level',
        'social_needs',
        'stranger_friendly',
        'vocalisation'
    ];

}
