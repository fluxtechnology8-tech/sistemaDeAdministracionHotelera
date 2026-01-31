<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'reservation_id',
        'amount',
        'payment_date',
        'method',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
