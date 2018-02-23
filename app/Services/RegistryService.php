<?php
	
	namespace App\Services;
	
	use App\Repositories\RegistryRepository;
	use Illuminate\Http\Request;
	use Rpc\Libarary\ServerResponse;
	
	class RegistryService
	{
		private $registryRepository;
		
		private $serverResponse;
		
		public $request;
		
		public function __construct(RegistryRepository $registryRepository, ServerResponse $serverResponse, Request $request)
		{
			$this->registryRepository = $registryRepository;
			
			$this->serverResponse = $serverResponse;
			
			$this->request = $request;
		}
		
		public function addRegistry()
		{
			$description = $this->request->input ('description');
			$title       = $this->request->input ('title');
			$ip          = $this->request->input ('ip');
			$name        = $this->request->input ('name');
			$group_id    = $this->request->input ('group_id');
			
			$result = $this->registryRepository->addRegistry ([
				'description' => $description,
				'title'       => $title,
				'ip'          => $ip,
				'name'        => $name,
				'group_id'    => $group_id,
			]);
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("添加成功");
			}
			
			return $this->serverResponse->createErrorMsg ("添加失败");
		}
		
		public function updateRegistry()
		{
			$description = $this->request->input ('description');
			$title       = $this->request->input ('title');
			$ip          = $this->request->input ('ip');
			$name        = $this->request->input ('name');
			$group_id    = $this->request->input ('group_id');
			$_id         = $this->request->input ('_id');
			
			$result = $this->registryRepository->updateRegistry ([
				'description' => $description,
				'title'       => $title,
				'ip'          => $ip,
				'name'        => $name,
				'group_id'    => $group_id,
				'_id'         => $_id,
			]);
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("更新成功");
			}
			
			return $this->serverResponse->createErrorMsg ("更新失败");
		}
		
		public function delRegistry()
		{
			$result = $this->registryRepository->del ($this->request->input ('rid'));
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("删除成功");
			}
			
			return $this->serverResponse->createErrorMsg ("删除失败");
		}
		
		public function weightRegistry()
		{
			$result = $this->registryRepository->updateWeight ($this->request->input ('id'), $this->request->input ('weight'));
			
			if ($result > 0) {
				return $this->serverResponse->createSuccessMsg ("更新成功");
			}
			
			return $this->serverResponse->createErrorMsg ("更新失败");
		}
	}