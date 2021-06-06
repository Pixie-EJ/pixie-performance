<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
