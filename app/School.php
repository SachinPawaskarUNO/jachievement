<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'school_name', 'school_address', 'school_city', 'school_state_id', 'school_zip', 'school_phone', 'school_latitude', 'school_longitude', 'active', 'created_by', 'updated_by'
    ];
}
