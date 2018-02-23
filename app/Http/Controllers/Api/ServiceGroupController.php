<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\ServiceGroupService;
	
	class ServiceGroupController extends Controller
	{
		private $serviceGroupService;
		
		public function __construct(ServiceGroupService $serviceGroupService)
		{
			$this->serviceGroupService = $serviceGroupService;
		}
		
		public function add()
		{
			return $this->serviceGroupService->add ();
		}
		
		
	}