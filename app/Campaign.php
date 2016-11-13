<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use SoftDeletes;
    //protected $table = 'campaigns';
    protected $fillable = [
							 'name','description', 'goal', 'image','email','phone', 'event_date','venue', 'default_content'
						  ];
}
