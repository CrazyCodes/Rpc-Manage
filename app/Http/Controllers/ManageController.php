<?php
	
	namespace App\Http\Controllers;
	
	use App\Presenters\ManageMenuPresenter;
	use Illuminate\Http\Request;
	
	
	class ManageController extends Controller
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
		public function index(ManageMenuPresenter $manageMenuPresenter)
		{
			return view ('manage');
		}
	}
