<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\RegistryService;
	
	class RegistryController extends Controller
	{
		private $registryService;
		
		public function __construct(RegistryService $registryService)
		{
			$this->registryService = $registryService;
		}
		
		public function addRegistry()
		{
			return $this->registryService->addRegistry ();
		}
		
		public function updateRegistry()
		{
			return $this->registryService->updateRegistry ();
		}
		
		public function delRegistry()
		{
			return $this->registryService->delRegistry ();
		}
		
		public function weightRegistry()
		{
			return $this->registryService->weightRegistry ();
		}
	}