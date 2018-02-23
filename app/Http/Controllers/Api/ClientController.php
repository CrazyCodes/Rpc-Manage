<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\ClientService;
	
	class ClientController extends Controller
	{
		private $clientService;
		
		public function __construct(ClientService $clientService)
		{
			$this->clientService = $clientService;
		}
		
		public function add()
		{
			return $this->clientService->add ();
		}
		
		public function notice()
		{
			return $this->clientService->notice ();
		}
		
		public function update()
		{
			return $this->clientService->update ();
		}
		
		public function del()
		{
			return $this->clientService->del ();
		}
	}