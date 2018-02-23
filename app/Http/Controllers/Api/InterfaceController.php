<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	
	class InterfaceController extends Controller
	{
		public function __invoke()
		{
			return '对外开放json文件';
		}
	}