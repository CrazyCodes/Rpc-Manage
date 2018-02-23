<?php
	
	namespace App\Repositories;
	
	use App\Models\Service;
	
	class ServiceRepository
	{
		private $service;
		
		public function __construct(Service $service)
		{
			$this->service = $service;
		}
		
		public function addService($args)
		{
			
			$models               = $this->service;
			$models->service_name = $args['service_name'];
			$models->function     = $args['function'];
			$models->params       = $args['params'];
			$models->response     = $args['response'];
			$models->description  = $args['description'];
			$models->group_id     = $args['group_id'];
			
			$rowCount = $models->save ();
			
			return $rowCount;
		}
		
		public function updateService($args)
		{
			$models               = $this->service::find ($args['_id']);
			$models->service_name = $args['service_name'];
			$models->function     = $args['function'];
			$models->params       = $args['params'];
			$models->response     = $args['response'];
			$models->description  = $args['description'];
			$models->group_id     = $args['group_id'];
			
			$rowCount = $models->save ();
			
			return $rowCount;
		}
		
		public function del($id)
		{
			$result = $this->service->where ([
				'id' => $id,
			])->delete ();
			
			return $result;
		}
		
		public function getServiceInfo($serviceId)
		{
			$result = $this->service
				->select ('*', 'group.id as groupId')
				->join ('group', 'service.group_id', '=', 'group.id')
				->where ([
					['service.id', '=', $serviceId],
				])->first ();
			
			return $result;
		}
	}