<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','description','started_at','ended_at', 'categories_id'];

    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }
}
