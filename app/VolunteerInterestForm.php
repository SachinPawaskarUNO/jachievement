<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VolunteerInterestForm extends Model
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
        'school_preference', 'first_name', 'last_name', 'company_name', 'company_address', 'company_city', 'company_state_id',
        'company_zip', 'company_phone', 'home_phone', 'home_address', 'home_city', 'home_state_id', 'home_zip', 'email', 'user_id',
        'mode_of_contact','contacted'
    ];

}
