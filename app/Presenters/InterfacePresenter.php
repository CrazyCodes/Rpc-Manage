<?php
	
	namespace App\Presenters;
	
	use App\Models\Group;
	use App\Models\Registry;
	use App\Models\Service;
	
	class InterfacePresenter
	{
		private $registry, $service, $group;
		
		public function __construct(Registry $registry, Service $service, Group $group)
		{
			$this->registry = $registry;
			$this->service  = $service;
			$this->group    = $group;
		}
		
		public function getInfo($group_id)
		{
			$data = [];
			
			$center = $this->registry->select ('ip')->where ([
				['group_id', '=', $group_id],
			])->get ();
			
			foreach ($center as $value) {
				
				$url = explode (':', $value->ip);
				
				$data['center'][] = [
					'ip'   => $url[0],
					'port' => $url[1],
				];
			}
			
			$consumer = $this->service->where ([
				['group_id', '=', $group_id],
			])->get ();
			
			foreach ($consumer as $value) {
				$data['consumer'][]                       = $value->service_name;
				$data['provider'][$value->service_name][] = [
					'method' => $value->function,
					'params' => explode (',', $value->params),
				];
			}
			
			@$data['consumer'] = array_unique ($data['consumer']);
			
			$group = $this->group->where ([
				['id', '=', $group_id],
			])->first ();
			
			@$data['name'] = $group->name;
			
			return json_encode ($data, JSON_PRETTY_PRINT);
			
		}
	}