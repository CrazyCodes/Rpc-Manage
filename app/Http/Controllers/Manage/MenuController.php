<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class MenuController extends Controller
	{
		public function index()
		{
			return view ('manage.menu');
		}
		
		public function add()
		{
			return view ('manage.menuAdd');
		}
		
		public function update()
		{
			return view ('manage.menuUpdate');
		}
		
		public function add_operate()
		{
			return view ('manage.menuAddOperate');
		}
	}