<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class UserGroupController extends Controller
	{
		public function index()
		{
			return view ('manage.userGroup');
		}
		
		public function add()
		{
			return view ('manage.userGroupAdd');
		}
	}