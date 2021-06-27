<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name', 'email', 'active', 'role'
    ];

    public function enterprises()
    {
        return $this->belongsTo('App\Enterprise');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
