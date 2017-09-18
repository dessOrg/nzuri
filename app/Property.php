<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Property extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category', 'type', 'user_id', 'image', 'bed', 'parking', 'bath','size', 'description', 'status', 'price', 'street', 'town', 'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
