<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function enterprises()
    {
        return $this->hasMany('App\Enterprise');
    }
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    public function rules()
    {
        return $this->belongsToMany('App\Rule');
    }
    public function scores()
    {
        return $this->hasMany('App\Score');
    }

}
