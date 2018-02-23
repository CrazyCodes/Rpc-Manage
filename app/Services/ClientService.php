<?php
	
	namespace App\Services;
	
	use App\Repositories\ClientRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\NoticeRequest;
	use Rpc\Libarary\ServerResponse;
	
	class ClientService
	{
		private $clientRepository;
		public $request;
		public $serverResponse;
		
		public function __construct(ClientRepository $clientRepository, Request $request, ServerResponse $serverResponse)
		{
			$this->clientRepository = $clientRepository;
			$this->request          = $request;
			$this->serverResponse   = $serverResponse;
			
		}
		
		public function add()
		{
			$result = $this->clientRepository->add ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
		
		public function notice()
		{
			$result = $this->clientRepository->notice ($this->request->all ());
			
			$rules = explode (',', $result['rules']);
			
			foreach ($rules as $value) {
				$data    = $this->clientRepository->getInfo ($value);
				$request = new NoticeRequest();
				$output  = $request->request ($data, $result->ip, $result->port);
			}
			
			
			if ($output) {
				return $this->serverResponse->createSuccessMsg ("通知成功");
			}
			
			return $this->serverResponse->createErrorMsg ("通知失败");
		}
		
		public function update()
		{
			$result = $this->clientRepository->update ($this->request->input ('mid'));
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("修改成功");
			}
			
			return $this->serverResponse->createErrorMsg ("修改失败");
		}
		
		public function del()
		{
			$result = $this->clientRepository->del ($this->request->all ());
			
			if ($result) {
				return $this->serverResponse->createSuccessMsg ("删除成功");
			}
			
			return $this->serverResponse->createErrorMsg ("删除失败");
		}
		
		
	}