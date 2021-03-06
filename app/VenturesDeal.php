<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenturesDeal extends Model
{
    public function venturesDealImages() {
       return $this->hasMany('App\VenturesDealImages');
    }

    protected $guarded = [];
}
