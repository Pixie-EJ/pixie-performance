<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['multiplier_value'];

    public function members()
    {
        return $this->belongsTo('App\Member');
    }
    public function events()
    {
        return $this->belongsTo('App\Event');
    }
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
    public function rules()
    {
        return $this->belongsTo('App\Rule');
    }
}
