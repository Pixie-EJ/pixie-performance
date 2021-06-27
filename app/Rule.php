<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['point','name'];

    public function enterprises()
    {
        return $this->belongsTo('App\Enterprise');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

}
