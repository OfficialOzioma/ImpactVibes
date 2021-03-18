<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'title',
        'category',
        'organizer_name',
        'eligible_region',
        'funded',
        'description',
        'link',
        'image'
        
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->select('id', 'name');
    }
}
