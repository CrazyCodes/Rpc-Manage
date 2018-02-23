<?php
	
	use Illuminate\Http\Request;
	
	/*
	|--------------------------------------------------------------------------
	| API Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register API routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| is assigned the "api" middleware group. Enjoy building your API!
	|
	*/
	
	Route::middleware ('auth:api')->get ('/user', function (Request $request) {
		return $request->user ();
	});
	
	
	/**
	 * @content             进程管理
	 *
	 * @stop                停止指定服务
	 * @start               开始指定服务
	 * @start_all           启动所有服务
	 * @stop_all            停止所有服务
	 *
	 * @return \Rpc\Libarary\ServerResponse
	 */
	Route::post ('stop', 'Api\SupervisorController@stop');
	Route::post ('start', 'Api\SupervisorController@start');
	Route::get ('start_all', 'Api\SupervisorController@startAll');
	Route::get ('stop_all', 'Api\SupervisorController@stopAll');
	
	
	/**
	 * @content             服务管理
	 *
	 * @add_service         添加服务
	 * @update_service      更新服务
	 * @del_service         删除服务
	 * @test_service        测试服务
	 *
	 * @return \Rpc\Libarary\ServerResponse
	 */
	Route::post ('add_service', 'Api\ServiceController@addService');
	Route::post ('update_service', 'Api\ServiceController@updateService');
	Route::post ('del_service', 'Api\ServiceController@delService');
	Route::post ('test_service', 'Api\ServiceController@testService');
	
	/**
	 * @content                 菜单管理
	 *
	 * @add_manage_menu         添加菜单
	 * @update_manage_menu      更新菜单
	 * @del_manage_menu         删除菜单
	 *
	 * @return \Rpc\Libarary\ServerResponse
	 */
	Route::post ('add_manage_menu', 'Api\ManageMenuController@add');
	Route::post ('del_manage_menu', 'Api\ManageMenuController@del');
	Route::post ('update_manage_menu', 'Api\ManageMenuController@update');
	Route::post ('add_manage_operate', 'Api\ManageMenuController@addOperate');
	
	
	/**
	 * @content             客户端管理
	 *
	 * @add_client          添加客户端
	 * @update_client       更新客户端
	 * @client_notice       通知客户端
	 *
	 * @return \Rpc\Libarary\ServerResponse
	 */
	Route::post ('add_client', 'Api\ClientController@add');
	Route::post ('update_client', 'Api\ClientController@update');
	Route::post ('del_client', 'Api\ClientController@del');
	Route::post ('client_notice', 'Api\ClientController@notice');
	
	
	/**
	 * @content               提供者管理
	 *
	 * @add_registry          添加提供者
	 * @update_registry       更新提供者
	 * @del_registry          删除提供者
	 *
	 * @return \Rpc\Libarary\ServerResponse
	 */
	Route::post ('add_registry', 'Api\RegistryController@addRegistry');
	Route::post ('update_registry', 'Api\RegistryController@updateRegistry');
	Route::post ('del_registry', 'Api\RegistryController@delRegistry');
	Route::post ('weight_registry', 'Api\RegistryController@weightRegistry');
	
	/**
	 * @content                 用户组管理
	 * @add_user_group          添加群组
	 */
	Route::post ('add_user_group', 'Api\UserGroupController@add');
	
	
	// 通知客户端更新配置
	
	Route::get ('open_setting', 'Api\InterfaceController');
	
	// 添加服务群组
	Route::post ('add_service_group', 'Api\ServiceGroupController@add');
	
	
	

