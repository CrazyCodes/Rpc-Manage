<?php
	
	namespace App\Repositories;
	
	use App\Models\Registry;
	
	class RegistryRepository
	{
		private $registry;
		
		public function __construct(Registry $registry)
		{
			$this->registry = $registry;
		}
		
		public function addRegistry($args)
		{
			$models              = $this->registry;
			$models->description = $args['description'];
			$models->title       = $args['title'];
			$models->ip          = $args['ip'];
			$models->name        = $args['name'];
			$models->group_id    = isset($args['group_id']) ? $args['group_id'] : 0;
			
			$rowCount = $models->save ();
			
			return $rowCount;
		}
		
		public function updateRegistry($args)
		{
			$models              = $this->registry::find ($args['_id']);
			$models->description = $args['description'];
			$models->title       = $args['title'];
			$models->ip          = $args['ip'];
			$models->name        = $args['name'];
			$models->group_id    = isset($args['group_id']) ? $args['group_id'] : 0;
			
			$rowCount = $models->save ();
			
			return $rowCount;
		}
		
		public function del($id)
		{
			$result = $this->registry->where ([
				['id', '=', $id],
			])->delete ();
			
			return $result;
		}
		
		public function updateWeight($id, $weight)
		{
			$result = $this->registry->where ([
				['id', '=', $id],
			])->update ([
				'weight' => $weight,
			]);
			
			return $result;
		}
	}