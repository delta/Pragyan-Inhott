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

use App\Http\Controllers\ViewController;

/*Route::post('/scores', 'ViewController@scores');
Route::get('/', "ViewController@index");
Route::get('/login', "ViewController@login");
Route::get('/admin/login', "AdminAuthController@login");
Route::get('/admin/auth', "AdminAuthController@auth");
Route::post('/user/auth', "AuthController@auth");
Route::get('/logout', "AuthController@logout");
Route::get('/admin/home', "AdminAuthController@admin_home");
Route::get('/register', "ViewController@register");
Route::post('/registered', "RegController@insert_register");

Route::get('/points', "ViewController@getPoints");*/

Route::get('/events/aialmanac', "ViewController@ai_almanac");
Route::get('/events/codegolf', "ViewController@code_golf");
Route::get('/events/consultquest', "ViewController@consult_quest");
Route::get('/events/decisionquest', "ViewController@decision_quest");
Route::get('/events/deconstruct', "ViewController@deconstruct");
Route::get('/events/egg', "ViewController@egg_drop");
Route::get('/events/mergerscape', "ViewController@merger_scape");
Route::get('/events/pmx', "ViewController@pmx");
Route::get('/events/readyplayerone', "ViewController@rpone");
Route::get('/events/scraphouse', "ViewController@scraphouse");
Route::get('/events/spacedrive', "ViewController@space_drive");
Route::get('/events/scsc', "ViewController@scsc");
Route::get('/events/startupshipwreck', "ViewController@startup_shipwreck");
Route::get('/events/stackflow', "ViewController@stack_flow");
Route::get('/events/trackmaster', "ViewController@trackmaster");

Route::get('/workshops/0to1startup', "ViewController@zero_to_one_startup");
Route::get('/workshops/caseinterviews', "ViewController@case_interviews");
Route::get('/workshops/celestialquest', "ViewController@celestial_quest");
Route::get('/workshops/celllogix', "ViewController@cell_logix");
Route::get('/workshops/designxperience', "ViewController@design_xperience");
Route::get('/workshops/introtomergers', "ViewController@mergers");
Route::get('/workshops/moneymoneybigmoney', "ViewController@money_money_big_money");
Route::get('/workshops/spideripfs', "ViewController@spider_ipfs");
Route::get('/workshops/spideronion', "ViewController@spider_onion");
Route::get('/workshops/textsummarization', "ViewController@text_summarization");
