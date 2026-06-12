<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    protected static function booted()
{
    static::creating(function ($subscription) {

        $subscription->start_date = now();

        $durations = [
            'Reader'    => 1,
            'Scholar'   => 2,
            'Luminary'  => 3,
        ];

        $years = $durations[$subscription->plan_name] ?? 1;

        $subscription->end_date = now()->addYears($years);
    });
}
    public function user(){
        return $this->belongsTo(user::class,'user_id');
    }
}
