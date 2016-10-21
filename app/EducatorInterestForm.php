<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducatorInterestForm extends Model
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
         'first_name', 'last_name', 'school_name', 'school_phone','school_address', 'school_city', 'school_state_id',
        'school_zip', 'email', 'grade', 'program_theme', 'planning_time', 'cell_phone', 'comments_requests',
        'no_of_classes', 'no_of_students_per_class', 'user_id'
    ];
}
