<?php
	
	namespace App\Repositories;
	
	use App\Models\Group;
	
	class ServiceGroupRepository
	{
		private $group;
		
		public function __construct(Group $group)
		{
			$this->group = $group;
		}
		
		public function add($args)
		{
			$models = $this->group;
			
			$models->name        = $args['name'];
			$models->description = $args['description'];
			
			$rowResult = $models->save ();
			
			return $rowResult;
		}
	}