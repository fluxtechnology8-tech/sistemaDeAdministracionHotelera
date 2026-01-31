<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'title',
        'rooms_number',
        'price'
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
