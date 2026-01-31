<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'father_surname',
        'mother_surname',
        'indentity_document',
        'phone',
        'born_date',
        'gender',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    // quien tiene la FK se le pone belongsTo
    // quien NO tiene la FK se le pone has*

    /**
     * Eager o ansioso: cuando llamas a tu tabla main, tambien se cargan sus relaciones
     * 
     * Lazy o perezoso: cuando llamas a tu tabla main, solo se cargan las relaciones cuando sean necesarios
     * 
     * N + 1: Es cuando cargar 1 + N registros
     */
}
