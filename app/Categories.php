<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function enterprises()
    {
        return $this->hasMany('App\Enterprise');
}
