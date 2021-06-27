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

    public function members()
    {
        return $this->hasMany('App\Member');
    }
    public function rules()
    {
        return $this->hasMany('App\Rule');
    }
}
