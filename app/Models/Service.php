<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'price'
    ];

    public function reservation()
    {
        return $this->belongsToMany(Reservation::class);
    }
}
