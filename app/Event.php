<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','description','started_at','ended_at', 'categories_id'];

    protected $casts = [
        'started_at' => 'datetime:Y-m-d H:i',
        'ended_at' => 'datetime:Y-m-d H:i',
    ];

    public function categories()
    {
       return $this->belongsTo('App\Category');
    }

    public function members()
    {
        return $this->belongsToMany('App\Member');
    }
}
