<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    	'city_id',
    	'street',
    	'number',
    	'neighborhood',
    	'complement',
    	'zip_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function city()
    {
    	return $this->belongsTo('App\City');
    }
}
