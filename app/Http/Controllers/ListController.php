<?php
	
	namespace App\Http\Controllers;
	
	class ListController extends Controller
	{
		public function index()
		{
			return view ('list');
		}
	}