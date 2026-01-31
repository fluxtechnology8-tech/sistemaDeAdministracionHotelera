<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'room_id'
    ];

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

}
