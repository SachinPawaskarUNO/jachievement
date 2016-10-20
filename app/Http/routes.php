<?php

/**
 *|--------------------------------------------------------------------------
 *| Application Routes
 *|--------------------------------------------------------------------------
 *|
 *| Here is where you can register all of the routes for an application.
 *| It's a breeze. Simply tell Laravel the URIs it should respond to
 *| and give it the controller to call when that URI is requested.
 *|
 *
 * @category   Application Routes
 * @package    Basic-Routes
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('php-version', function()
{
    return phpinfo();
});

Route::get('laravel-version', function()
{
    $laravel = app();
    return 'Your Laravel Version is '.$laravel::VERSION;
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::post('change-password', 'Auth\AuthController@updatePassword');
    Route::get( 'change-password', 'Auth\AuthController@viewPage');

    Route::get('/home', 'HomeController@index');

    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');

Route::get('/volunteers/introduction', 'InterestformsController@index');
Route::get('/volunteers/interestform', 'InterestformsController@interestform');
Route::post('/volunteers/interestform', 'InterestformsController@store');
Route::get('/educators/introduction', 'EducatorsController@index');
Route::get('/educators/interestform', 'EducatorsController@interestform');
Route::post('/educators/interestform', 'EducatorsController@store');

Route::get('/campaign/teammember', 'CampaignController@teammember');
Route::get('/campaign/team', 'CampaignController@team');

Route::get('/donation/donate', 'DonationController@donationform');
Route::post('/donation/donate', 'DonationController@store');
Route::get('/donation/notification', 'DonateController@notification');
Route::get('/campaign/team/join', 'CampaignController@jointeam');
Route::get('/campaign/team/teammember', 'CampaignController@teammember');

Route::get('/get_Involved/getinvolved', 'EducatorsController@getInvolved');

Route::get('/contactus', 'ContactController@contactus');
Route::post('/contactus', 'ContactController@sendmail');

Route::get('/aboutus/index', 'AboutUsController@aboutus');
Route::get('/aboutus/map', 'MapController@map');

Route::get('/programs/index', 'ProgramController@program');
Route::get('/contributors', 'ContributorController@index');


//    Route::delete('/comments/{comment}', 'CommentsController@destroy');
//    Route::resource('comments', 'CommentsController');
//    Route::get('comments/{student}/addforstudent', ['as' => 'comments.addforstudent',
//        'uses' => 'CommentsController@addforstudent']);
//    Route::get('comments/{planofstudy}/addforplanofstudy', ['as' => 'comments.addforplanofstudy',
//        'uses' => 'CommentsController@addforplanofstudy']);

//});
