<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	
	class ProcessController extends Controller
	{
		public function index()
		{
			return view ('manage.process');
		}
	}