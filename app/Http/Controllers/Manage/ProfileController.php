<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ProfileController extends Controller
	{
		public function index()
		{
			return view('manage.profile');
		}
	}