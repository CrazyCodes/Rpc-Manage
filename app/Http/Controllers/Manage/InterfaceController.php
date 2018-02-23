<?php
	
	namespace App\Http\Controllers\Manage;
	
	use App\Http\Controllers\Controller;
	use App\Presenters\InterfacePresenter;
	
	class InterfaceController extends Controller
	{
		public function index(InterfacePresenter $interfacePresenter)
		{
			$interfacePresenter->getInfo (request ('group_id'));
			
			return view ('manage.interface');
		}
	}