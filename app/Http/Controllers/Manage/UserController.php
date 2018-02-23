<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class UserController extends Controller
	{
		public function index()
		{
			return view ('manage.user');
		}
	}