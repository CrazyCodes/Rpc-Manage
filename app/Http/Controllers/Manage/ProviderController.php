<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ProviderController extends Controller
	{
		public function index()
		{
			return view ('manage.provider');
		}
	}