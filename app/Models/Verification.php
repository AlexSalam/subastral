<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/06/18
 * Time: 10:47
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
        'code',
        'user_id'
    ];

    public function User() {
        return $this->belongsTo('App\Models\User');
    }
}