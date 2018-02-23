<?php
	
	namespace App\Services;
	
	use App\Repositories\ManageMenuRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\ServerResponse;
	
	class ManageMenuService
	{
		private $manageMenuRepository;
		private $serverResponse;
		public $request;
		
		
		public function __construct(ManageMenuRepository $manageMenuRepository, Request $request, ServerResponse $serverResponse)
		{
			$this->manageMenuRepository = $manageMenuRepository;
			
			$this->request = $request;
			
			$this->serverResponse = $serverResponse;
		}
		
		public function add()
		{
			$result = $this->manageMenuRepository->add ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
		
		public function del()
		{
			$result = $this->manageMenuRepository->del ($this->request->input ('mid'));
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("删除成功");
			}
			
			return $this->serverResponse->createErrorMsg ("删除失败");
			
		}
		
		public function update()
		{
			$result = $this->manageMenuRepository->update ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("修改成功");
			}
			
			return $this->serverResponse->createErrorMsg ("修改失败");
		}
		
		public function addOperate(){
			$result = $this->manageMenuRepository->addOperate ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
	}