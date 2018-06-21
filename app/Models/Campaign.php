<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'name',
        'description',
        'beginning',
        'min_level',
        'max_level',
        'author'
    ];

    protected $hidden = [];

    public function User() {
        return $this->belongsTo('App\Models\User');
    }
}
