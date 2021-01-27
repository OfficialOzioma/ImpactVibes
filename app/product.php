<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    protected $fillable = [
        'product_name', 'product_detail', 'product_category', 'price', 'unit_in_stock', 'product_img',
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->select('id', 'name');
    }
}
