<?php
	
	namespace App\Services;
	
	use App\Repositories\ServiceGroupRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\ServerResponse;
	
	class ServiceGroupService
	{
		private $serviceGroupRepository;
		
		public $request, $serverResponse;
		
		public function __construct(ServiceGroupRepository $serviceGroupRepository, ServerResponse $serverResponse, Request $request)
		{
			$this->serviceGroupRepository = $serviceGroupRepository;
			$this->serverResponse         = $serverResponse;
			$this->request                = $request;
		}
		
		public function add()
		{
			$result = $this->serviceGroupRepository->add ($this->request->all ());
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
	}