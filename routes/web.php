<?php
	
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
	
	Route::get ('/', function () {
		return view ('index');
	});
	
	Auth::routes ();
	
	Route::get ('logout', 'Auth\LogoutController@index');
	
	Route::middleware ('auth')->group (function () {
		Route::get ('/manage/index', 'ManageController@index');
		Route::get ('/manage/supervisor', 'SupervisorController@index');
		Route::get ('/manage/list', 'ListController@index');
		Route::get ('/manage/menu', 'Manage\MenuController@index');
		Route::get ('/manage/menu/add', 'Manage\MenuController@add');
		Route::get ('/manage/menu/update', 'Manage\MenuController@update');
		Route::get ('/manage/menu/add_operate', 'Manage\MenuController@add_operate');
		Route::get ('/manage/provider', 'Manage\ProviderController@index');
		Route::get ('/manage/user', 'Manage\UserController@index');
		Route::get ('/manage/process', 'Manage\ProcessController@index');
		Route::get ('/manage/service_group', 'Manage\ServiceGroupController@index');
		Route::get ('/manage/service_group/add', 'Manage\ServiceGroupController@add');
		Route::get ('/manage/service_group/search', 'Manage\ServiceGroupController@search');
		Route::get ('/manage/service/add', 'Manage\ServiceController@add');
		Route::get ('/manage/service/update', 'Manage\ServiceController@update');
		Route::get ('/manage/service/test', 'Manage\ServiceController@test');
		Route::get ('/manage/profile', 'Manage\ProfileController@index');
		Route::get ('/manage/registry/add', 'Manage\RegistryController@add');
		Route::get ('/manage/registry/update', 'Manage\RegistryController@update');
		Route::get ('/manage/client', 'Manage\ClientController@index');
		Route::get ('/manage/client/add', 'Manage\ClientController@add');
		Route::get ('/manage/client/update', 'Manage\ClientController@update');
		Route::get ('/manage/interface', 'Manage\InterfaceController@index');
		Route::get ('/manage/user_group', 'Manage\UserGroupController@index');
		Route::get ('/manage/user_group/add', 'Manage\UserGroupController@add');
	});
	
