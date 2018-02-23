<?php
	
	namespace App\Presenters;
	
	use App\Models\Group;
	
	class GroupPresenter
	{
		private $group;
		
		public function __construct(Group $group)
		{
			$this->group = $group;
		}
		
		public function getGroupList()
		{
			$rowResult = $this->group->get ();
			
			return $rowResult;
		}
	}