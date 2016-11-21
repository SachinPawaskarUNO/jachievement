<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/';
    protected $loginPath = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => ['logout', 'updatePassword']]);
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users|confirmed',
            'password' => 'required|min:6|max:16|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }



    public function viewPage()
    {
        if (Auth::check())
        {
            return view('auth.passwords.change');
        }
    }

    // Todo: should probably implemeent a trait ChangePassword
    /**
     * Updates the password for the current user.
     *
     * @param  void
     * @return void
     */

    public function updatePassword()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $rules = array(
                'current_password' => 'required',
                'new_password' => 'required|min:6|max:16',
                'password_confirmation' => 'required|min:6|max:16|same:new_password'
            );

            $validator = Validator::make(Input::all(), $rules);
                if ($validator->fails())
                {
                    return view('auth.passwords.change')->withErrors($validator);
                    //return view('auth.passwords.change');
                }
                else
                {
                     if (!Hash::check(Input::get('current_password'), $user->password))
                     {
                       \Session::flash('current_password','Your current password does not match');
                        return view('auth.passwords.change')->with('message','Your current password is incorrect');
                     }
                     else
                     {
                         $user->password = bcrypt(Input::get('new_password'));
                         $user->save();
                         \Session::flash('flash_message','Your password has been successfully changed');
                         return view('auth.passwords.change');
                     }
                }
        }
    }

    // This function overridden the one in traits AuthenticatesUsers.php
    protected function getCredentials($request)
    {
        $request['active'] = true;
        $request['deleted_at'] = null;
        return $request->only($this->loginUsername(), 'password', 'active', 'deleted_at');
    }


}
