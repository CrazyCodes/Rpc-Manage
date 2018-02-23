<?php
	
	namespace App\Services;
	
	use App\Repositories\ServiceRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\ClientResponse;
	use Rpc\Libarary\ServerResponse;
	
	class ServiceService
	{
		private $serviceRepository;
		private $serverResponse;
		
		public $request;
		
		public function __construct(ServiceRepository $serviceRepository, Request $request, ServerResponse $serverResponse)
		{
			$this->serviceRepository = $serviceRepository;
			
			$this->request = $request;
			
			$this->serverResponse = $serverResponse;
		}
		
		public function addService()
		{
			$service_name = $this->request->input ('service_name');
			$function     = $this->request->input ('function');
			$params       = $this->request->input ('params');
			$response     = $this->request->input ('response');
			$description  = $this->request->input ('description');
			$group_id     = $this->request->input ('group_id');
			
			$result = $this->serviceRepository->addService ([
				'service_name' => $service_name,
				'function'     => $function,
				'params'       => $params,
				'response'     => $response,
				'description'  => $description,
				'group_id'     => $group_id,
			]);
			
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
		
		public function updateService()
		{
			$service_name = $this->request->input ('service_name');
			$function     = $this->request->input ('function');
			$params       = $this->request->input ('params');
			$response     = $this->request->input ('response');
			$description  = $this->request->input ('description');
			$group_id     = $this->request->input ('group_id');
			$_id          = $this->request->input ('_id');
			
			$result = $this->serviceRepository->updateService ([
				'service_name' => $service_name,
				'function'     => $function,
				'params'       => $params,
				'response'     => $response,
				'description'  => $description,
				'group_id'     => $group_id,
				'_id'          => $_id,
			]);
			
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("更新成功");
			}
			
			return $this->serverResponse->createErrorMsg ("更新失败");
		}
		
		public function delService()
		{
			$result = $this->serviceRepository->del ($this->request->input ('sid'));
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("删除成功");
			}
			
			return $this->serverResponse->createErrorMsg ("删除失败");
			
		}
		
		public function testService()
		{
			$service_id = $this->request->input ('service_id');
			$params     = json_decode ($this->request->input ('params'), true);
			
			$serviceInfo = $this->serviceRepository->getServiceInfo ($service_id);
			
			$client = new ClientResponse();
			
			$result = $client->request ($serviceInfo->name, $serviceInfo->service_name, $serviceInfo->function, $params);
			
			return $this->serverResponse->createSuccessMsg ($result);
		}
		
	}