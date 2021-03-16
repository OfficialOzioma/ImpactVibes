<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'link',
        'image'
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->select('id', 'name');
    }
}
