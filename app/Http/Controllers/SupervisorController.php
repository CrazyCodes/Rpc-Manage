<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	
	class SupervisorController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware ('auth');
		}
		
		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			return view ('supervisor');
		}
	}
