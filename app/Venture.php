<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venture extends Model
{
    protected $table = "ventures";

    protected $fillable = [
        'startup_name',
        'venture_type',
        'about_startup',
        'picture_of_the_startup',
        'city',
        'state',
        'country',
        'Website',
        'founder_name',
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->select('id', 'name');
    }
}
