<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class RuleCategory extends Pivot
{
    use SoftDeletes;

    protected $table = 'rules_categories';


    protected $fillable = ['rules_id','categories_id'];

}
