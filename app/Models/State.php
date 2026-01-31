<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'entidad',
        'title',
        'description'
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
