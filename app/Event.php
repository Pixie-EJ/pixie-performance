<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','description','started_at','ended_at', 'categories_id'];
}
