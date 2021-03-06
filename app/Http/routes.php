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


Route::get('/', 'HomeController@home');
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



Route::get('/donation/donate', 'DonationController@donationform');
Route::post('/donation/donate', 'DonationController@store');
Route::get('/donation/notification', 'DonateController@notification');
Route::get('/donation/thankyou', 'DonationController@thankyou');
Route::get('/donation/cancel', 'DonationController@cancel');

Route::get('/event/teammember/view/{id}', 'CampaignController@teammember');
Route::get('/event/teammember/edit/{id}', 'CampaignController@editTeamMember');
Route::post('/event/teammember/update', 'CampaignController@updateTeamMember');

Route::get('/event/team/view/{id}', 'CampaignController@team');
Route::get('/event/team/edit/{id}', 'CampaignController@editTeam');
Route::post('/event/team/update', 'CampaignController@updateTeam');
Route::get('/event/team/join/{teamId}', 'CampaignController@joinTeam');
Route::post('/event/team/join', 'CampaignController@joinTeamStore');
Route::post('/event/team', 'CampaignController@sendmail');
Route::post('/event/teammember', 'CampaignController@sendmailmember');

Route::get('/event/team/create/{campaignId}', 'CampaignController@createTeam');
Route::post('/event/team/create', 'CampaignController@createTeamStore');

Route::get('/event/current', 'CampaignController@eventMarketing');
Route::get('/event/eventdetail/{campaignId}', 'CampaignController@eventDetail');
Route::get('/event/team/view', 'CampaignController@teamview');

Route::get('/get_Involved/getinvolved', 'EducatorsController@getInvolved');

Route::get('/contactus', 'ContactController@contactus');
Route::post('/contactus', 'ContactController@sendmail');

Route::get('/aboutus/index', 'AboutUsController@aboutus');
Route::get('/aboutus/map', 'MapController@map');
Route::get('/programs/view', 'AboutUsController@program');

Route::get('/donors', 'ContributorController@index');

Route::get('/admin/educatorform', 'AdminController@listEducatorForm');
Route::get('/admin/volunteerform', 'AdminController@listVolunteerForm');
Route::get('/admin/educatorform/{id}', 'AdminController@showEducatorDetails');
Route::post('/admin/educatorform/{id}/delete', 'AdminController@destroyEducatorForm');
Route::get('/admin/volunteerform/{id}', 'AdminController@showVolunteerDetails');
Route::post('/admin/volunteerform/{id}/delete', 'AdminController@destroyVolunteerForm');
Route::get('/admin/download/volunteerreport', 'AdminController@downloadVolunteerReport');
Route::get('/admin/download/educatorreport', 'AdminController@downloadEducatorReport');
Route::get('/reports/donation', 'ReportsController@DonationReporting');
Route::get('/reports/download/donation', 'ReportsController@downloadDonations');

Route::resource('schools', 'SchoolController');
Route::resource('programs', 'ProgramController');
Route::resource('events', 'EventController');
Route::resource('organizations', 'OrganizationController');
Route::resource('faqs', 'FAQController');




Route::resource('staticcontents', 'StaticContentController');

   Route::get('comments/{student}/addforstudent', ['as' => 'comments.addforstudent',
       'uses' => 'CommentsController@addforstudent']);
   Route::get('comments/{planofstudy}/addforplanofstudy', ['as' => 'comments.addforplanofstudy',
       'uses' => 'CommentsController@addforplanofstudy']);


   //Route::resource('comments', 'CommentsController');
Route::get('/admin/comments/index', 'CommentsController@index');
Route::delete('/admin/comments/{id}/del', 'CommentsController@destroy');
Route::get('/admin/comments/{id}/apt', 'CommentsController@accept');
Route::get('/admin/comments/{id}/rjt', 'CommentsController@reject');

Route::get('/hints/view', 'HintsController@view');
Route::post('/hints/view', 'HintsController@store');
//Route::get('/faq/view', 'Maven\MavenController@view');
Route::get('/faq/view', 'FAQController@view');


/*\Sukohi\Maven\Maven::route('en');*/
//});


Route::get('/dashboard', 'DashboardController@index');
Route::get('/visitors', 'DashboardController@visitors');