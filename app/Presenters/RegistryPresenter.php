<?php
	
	namespace App\Presenters;
	
	use App\Models\Registry;
	
	class RegistryPresenter
	{
		private $registry;
		
		public function __construct(Registry $registry)
		{
			$this->registry = $registry;
		}
		
		public function getRegistryList()
		{
			$rowResult = $this->registry->get ();
			
			return $rowResult;
		}
		
		public function getRegistryForGroupIdList($group_id)
		{
			$rowResult = $this->registry->where ([
				['group_id', '=', $group_id],
			])->get ();
			
			return $rowResult;
		}
		
		public function getRegistryInfoToId($id)
		{
			$result = $this->registry->where ([
				['id', '=', $id],
			])->first ();
			
			return $result;
		}
	}