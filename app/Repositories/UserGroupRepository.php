<?php
	
	namespace App\Repositories;
	
	use App\Models\UserGroup;
	
	class UserGroupRepository
	{
		protected $userGroup;
		
		public function __construct(UserGroup $userGroup)
		{
			$this->userGroup = $userGroup;
		}
		
		public function add($args)
		{
			$models = $this->userGroup;
			
			$models->name           = $args['name'];
			$models->menu_permis    = implode (',', $args['menu_permis']);
			$models->operate_permis = implode (',', $args['operate_permis']);
			
			$result = $models->save ();
			
			return $result;
		}
	}