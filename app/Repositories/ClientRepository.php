<?php
	
	namespace App\Repositories;
	
	use App\Models\Client;
	use App\Models\Group;
	use App\Models\Registry;
	use App\Models\Service;
	
	class ClientRepository
	{
		private $client;
		private $registry, $service, $group;
		
		
		public function __construct(Client $client, Registry $registry, Service $service, Group $group)
		{
			$this->client   = $client;
			$this->registry = $registry;
			$this->service  = $service;
			$this->group    = $group;
		}
		
		public function add($args)
		{
			$models = $this->client;
			
			$models->ip     = $args['ip'];
			$models->port   = $args['port'];
			$models->name   = $args['name'];
			$models->domain = $args['domain'];
			$models->rules  = $args['rules'];
			
			$result = $models->save ();
			
			return $result;
		}
		
		public function update($args)
		{
			$models = $this->client::find ($args['_id']);
			
			$models->ip     = $args['ip'];
			$models->port   = $args['port'];
			$models->name   = $args['name'];
			$models->domain = $args['domain'];
			$models->rules  = $args['rules'];
			
			$result = $models->save ();
			
			return $result;
		}
		
		public function notice($args)
		{
			$result = $this->client->where ([
				['id', '=', $args['id']],
			])->first ();
			
			return $result;
		}
		
		public function del($clientId)
		{
			$result = $this->client->where ([
				['id', '=', $clientId],
			])->delete ();
			
			return $result;
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
			
			$data['name'] = $group->name;
			
			return $data;
			
		}
		
		
	}