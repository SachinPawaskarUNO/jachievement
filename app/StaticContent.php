<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticContent extends Model
{


    protected $table = 'static_contents';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page', 'item', 'type', 'content', 'default_content', 'created_by', 'updated_by'
    ];
}

