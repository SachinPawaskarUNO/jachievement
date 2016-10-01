<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerProgram extends Model
{

    protected $fillable = [
        'volunteerform_id', 'program_id'
    ];
}
