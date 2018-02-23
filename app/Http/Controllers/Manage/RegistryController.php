<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class RegistryController extends Controller
	{
		public function add()
		{
			return view ('manage.registryAdd');
		}
		
		public function update()
		{
			return view ('manage.registryUpdate');
		}
	}