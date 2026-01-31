<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_code',
        'room_type_id',
        'state_id'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }
}
