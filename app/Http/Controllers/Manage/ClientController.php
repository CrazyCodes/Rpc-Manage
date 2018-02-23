<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ClientController extends Controller
	{
		public function index()
		{
			return view ('manage.client');
		}
		
		public function add()
		{
			return view ('manage.clientAdd');
		}
		
		public function update()
		{
			return view ('manage.clientUpdate');
		}
	}