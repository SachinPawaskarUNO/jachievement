<?php

/**
 * User Model
 *
 * @category   User
 * @package    Basic-Models
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Log;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    // ToDo: This needs to checked to remove the below SoftDelete comment once the traits clash is fixed.
//    use SoftDeletes;
    use EntrustUserTrait; // Entrust Package requires this trait

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
        'name', 'email', 'password', 'active', 'created_by', 'updated_by'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get a List of roles ids associated with the current user.
     *
     * @return array
     */
    public function getRoleListAttribute()
    {
        return $this->roles->lists('id')->all();
    }

    /**
     * Returns if the user is active or not (true/false)
     *
     * @return mixed
     */
    public function isActive()
    {
        return $this->active;
    }
}
