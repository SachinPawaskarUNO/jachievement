<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    protected $table = 'programs';
    protected $dates = ['deleted_at'];
    protected $fillable = [

        'id','name','implementation', 'entrepreneurship','financial_readiness','work_readiness','image','program_url','description','grade_id'

    ];
}
