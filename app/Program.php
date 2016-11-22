<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = [
        'name','implementation', 'entrepreneurship','financial_readiness','work_readiness','image','program_url','description','grade_id'
    ];
}
