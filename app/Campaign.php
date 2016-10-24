<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $fillable = [
							'name','description', 'goal', 'category','start_date','end_date', 'active'
						  ];
}
