<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_name', 'product_detail', 'product_category', 'price', 'unit_in_stock', 'product_img',
    ];
}
