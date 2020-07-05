<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin'); 
// Route::get('register', 'AuthController@register');
// Route::post('/register', 'AuthController@postRegister'); 
// Route::get('dashboard', 'AuthController@dashboard'); 
// Route::get('logout', 'AuthController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/add/poll', 'HomeController@addPoll');//render the page that a user will see when adding a new poll

Route::post('/save/new/poll', 'HomeController@savePoll');//logic to save a new poll title

Route::post('/save/option/{id}', 'HomeController@saveOption');//logic to add option

Route::get('/delete/option/{id}', 'HomeController@deleteOption');//delete option;

Route::get('/get/all/polls', 'HomeController@getPolls');//get all polls with it's relationships

Route::get('/get/all/polls/per/user','HomeController@getUserPolls');//get polls added by you

Route::get('/delete/poll/{id}', 'HomeController@deletePoll');//delete Poll

Route::get('/get/options/for/poll/{id}', 'HomeController@getPollOptions');//get options

Route::get('/get/polls/with/options', 'HomeController@fetchPoll');//get polls and the option

Route::get('/send/votes/to/database/{id}', 'HomeController@storeVote');//store vote

Route::post('/save/poll/comments','HomeController@saveComments');//save comments logic



// admin routes

Route::get('/admin/index', 'AdminController@admin');//admin dashboard

Route::get('/activate/poll/{id}', 'AdminController@activatePoll');//activate poll

Route::get('/kill/poll/{id}', 'AdminController@killPoll');//de-activate poll

Route::get('/get/comments/poll/{id}', 'AdminController@getComments');//get comments for poll