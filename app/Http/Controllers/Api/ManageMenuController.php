<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\ManageMenuService;
	
	class ManageMenuController extends Controller
	{
		private $manageMenuService;
		
		public function __construct(ManageMenuService $manageMenuService)
		{
			$this->manageMenuService = $manageMenuService;
		}
		
		public function add()
		{
			return $this->manageMenuService->add ();
		}
		
		public function del()
		{
			return $this->manageMenuService->del ();
		}
		
		public function update()
		{
			return $this->manageMenuService->update ();
		}
		
		public function addOperate()
		{
			return $this->manageMenuService->addOperate ();
		}
	}