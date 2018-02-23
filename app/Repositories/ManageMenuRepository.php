<?php
	
	namespace App\Repositories;
	
	use App\Models\ManageMenu;
	use App\Models\ManageMenuOperate;
	
	class ManageMenuRepository
	{
		private $manageMenu, $manageMenuOperate;
		
		public function __construct(ManageMenu $manageMenu, ManageMenuOperate $manageMenuOperate)
		{
			$this->manageMenu        = $manageMenu;
			$this->manageMenuOperate = $manageMenuOperate;
		}
		
		public function add($args)
		{
			$models = $this->manageMenu;
			
			$models->name = $args['name'];
			$models->url  = $args['url'];
			$models->icon = $args['icon'];
			$models->sort = $args['sort'];
			$models->pid  = isset($args['pid']) ? $args['pid'] : 0;
			
			$rowResult = $models->save ();
			
			return $rowResult;
		}
		
		public function del($id)
		{
			$result = $this->manageMenu->where ([
				'id' => $id,
			])->delete ();
			
			return $result;
		}
		
		public function update($args)
		{
			
			$models = $this->manageMenu::find ($args['_id']);
			
			$models->name = $args['name'];
			$models->url  = $args['url'];
			$models->icon = $args['icon'];
			$models->sort = $args['sort'];
			$models->pid  = isset($args['pid']) ? $args['pid'] : 0;
			
			$rowResult = $models->save ();
			
			return $rowResult;
		}
		
		public function addOperate($args)
		{
			$models = $this->manageMenuOperate;
			
			$models->name = $args['name'];
			$models->url  = $args['url'];
			$models->manage_menu_id  = $args['manage_menu_id'];
			
			$rowResult = $models->save ();
			
			return $rowResult;
		}
	}