<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ServiceGroupController extends Controller
	{
		public function index()
		{
			return view ('manage.serviceGroup');
		}
		
		public function add()
		{
			return view ('manage.serviceGroupAdd');
		}
		
		public function search()
		{
			return view ('manage.serviceGroupSearch');
		}
	}