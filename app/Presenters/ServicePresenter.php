<?php
	
	namespace App\Presenters;
	
	use App\Models\Service;
	
	class ServicePresenter
	{
		private $service;
		
		public function __construct(Service $service)
		{
			$this->service = $service;
		}
		
		public function getServiceForRegistryId($groupId)
		{
			$rowResult = $this->service->where ([
				['group_id', '=', $groupId],
			])->get ();
			
			return $rowResult;
		}
		
		public function getServiceInfoToId($service_id)
		{
			$result = $this->service->where ([
				['id', '=', $service_id],
			])->first ();
			
			return $result;
		}
		
		public function searchServiceName($service_name)
		{
			$result = $this->service->where ([
				['service_name', 'like', '%' . $service_name . '%'],
			])->get ();
			
			return $result;
		}
		
	}