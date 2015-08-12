
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('home');
});
Route::get('demo', function()
{
    return 'hello.....!!!!';
});
Route::get('users', function()
{
    return View::make('users');
});
Route::get('/home', function()
{
    return View::make('home');
});
Route::get('about', function()
{
    return View::make('about');
});
//Route for saving record
Route::put('/form_data', ['uses' => 'LoginController@try_login']);
//Route for Update record
Route::put('/update_data', ['uses' => 'LoginController@update_rec']);
//Route for delete record
Route::get('/delrecord', ['uses' => 'LoginController@delete_rec']);
//Route for displaying record
Route::get('/record', ['uses' => 'LoginController@disp_rec']);
//Route for editing record
Route::get('/editrecord', ['uses' => 'LoginController@edit_rec']);
