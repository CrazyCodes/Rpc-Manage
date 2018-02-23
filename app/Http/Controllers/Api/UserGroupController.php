<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\UserGroupService;
	
	class UserGroupController extends Controller
	{
		protected $userGroupService;
		
		public function __construct(UserGroupService $userGroupService)
		{
			$this->userGroupService = $userGroupService;
		}
		
		public function add()
		{
			return $this->userGroupService->add ();
		}
	}