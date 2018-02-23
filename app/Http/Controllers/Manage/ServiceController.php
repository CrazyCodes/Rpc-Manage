<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ServiceController extends Controller
	{
		public function add()
		{
			return view ('manage.serviceAdd');
		}
		
		public function update()
		{
			return view ('manage.serviceUpdate');
		}
		
		public function test()
		{
			return view ('manage.serviceTest');
		}
	}