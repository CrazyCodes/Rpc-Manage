<?php
	
	namespace App\Services;
	
	use App\Repositories\UserGroupRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\ServerResponse;
	
	class UserGroupService
	{
		public $request, $serverResponse;
		
		protected $userGroupRepository;
		
		public function __construct(UserGroupRepository $userGroupRepository, Request $request, ServerResponse $serverResponse)
		{
			$this->userGroupRepository = $userGroupRepository;
			$this->request             = $request;
			$this->serverResponse      = $serverResponse;
		}
		
		public function add()
		{
			$result = $this->userGroupRepository->add ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
	}