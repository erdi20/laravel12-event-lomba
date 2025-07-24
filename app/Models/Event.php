<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $filable = [
        'user_id',
        'slug',
        'description',
        'start_date',
        'end_date',
        'registration_open_date',
        'registration_close_date',
        'location',
        'price',
        'max_participants',
        'current_participants',
        'status',
        'poster_img',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Registrasi()
    {
        return $this->hasMany(Registration::class);
    }

    public function Category()
    {
        return $this->belongsToMany(Category::class);
    }
}
