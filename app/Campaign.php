<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = [
							'id', 'name','description', 'goal', 'image','email','phone', 'event_date','venue', 'default_content'
						  ];
}
