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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/group','HomeController@group')->name('group');

Route::get('/group_read/{id}','HomeController@groupRead')->name('group_read');

Route::get('/group_create','HomeController@groupCreate')->name('group_create');

Route::post('/group_create_insert','HomeController@groupCreateInsert')->name('group_create_insert');

Route::get('/group_update/{id}','HomeController@groupUpdate')->name('group_update');

Route::post('/group_update_insert/{id}','HomeController@groupUpdateInsert')->name('group_update_insert');

Route::get('/group_delete/{id}','HomeController@groupDelete')->name('group_delete');

Route::get('/group_admin','HomeController@groupAdmin')->name('group_admin');

Route::get('/group/member','HomeController@groupMember')->name('group_member');

Route::post('/group/member/insert','HomeController@groupMemberInsert')->name('group_member_insert');
