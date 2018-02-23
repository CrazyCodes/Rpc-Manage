<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\ServiceService;
	
	class ServiceController extends Controller
	{
		private $serviceService;
		
		public function __construct(ServiceService $serviceService)
		{
			$this->serviceService = $serviceService;
		}
		
		public function addService()
		{
			return $this->serviceService->addService ();
		}
		
		public function updateService()
		{
			return $this->serviceService->updateService ();
		}
		
		public function delService()
		{
			return $this->serviceService->delService ();
		}
		
		public function testService()
		{
			return $this->serviceService->testService ();
		}
	}