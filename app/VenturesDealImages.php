<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenturesDealImages extends Model
{
    public function venturesDeal() {
        return $this->belongsTo('App\VenturesDeal');
     }

     protected $guarded = [];

}
