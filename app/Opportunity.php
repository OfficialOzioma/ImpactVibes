<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'title',
        'category',
        'organizer_name',
        'eligible_region',
        'funded',
        'end_date',
        'description',
        'link',
        'image'
        
    ];

    public function getRemainingDaysAttribute()
    {
        if ($this->end_date) {
            $remaining_days = Carbon::now()->diffInDays(Carbon::parse($this->end_date));
        } else {
            $remaining_days = 0;
        }
        return $remaining_days;
    }

    public function user()
    {
        return $this->belongsTo('App\User')->select('id', 'name');
    }
}
