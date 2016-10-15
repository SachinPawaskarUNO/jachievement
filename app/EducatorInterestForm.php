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
         'firstName', 'lastName', 'schoolName', 'schoolPhone','schoolAddress', 'schoolCity', 'schoolStateId',
        'schoolZip', 'email', 'grade', 'programTheme', 'planningTime', 'cellphone', 'commentsRequests',
        'noOfClaases', 'noOfStudentsPerClass', 'user_id'
    ];
}
