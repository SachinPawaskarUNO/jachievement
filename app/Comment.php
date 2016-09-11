<?php

/**
 * Comment Model
 *
 * @category   Comment
 * @package    Basic-Models
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
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
    protected $fillable = ['user_id', 'text', 'created_by', 'updated_by'];

    /**
     * Get all of the owning likeable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        // This neeeds to be implemented for every object that requires a comment
//        if (strpos($this->commentable_type, 'SkeletalElement') !== false) {
//            return "SkeletalElement";
//        } else {
//            return "Unknown";
//        }

    }
}
