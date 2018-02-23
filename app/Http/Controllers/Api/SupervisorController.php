<?php
	
	namespace App\Http\Controllers\Api;
	
	use App\Http\Controllers\Controller;
	use App\Services\SupervisorService;
	use Illuminate\Http\Request;
	use Tcp\Libarary\ServerResponse;
	
	class SupervisorController extends Controller
	{
		protected $supervisorService;
		protected $request;
		protected $serverResponse;
		
		public function __construct(SupervisorService $supervisorService, Request $request, ServerResponse $serverResponse)
		{
			$this->supervisorService = $supervisorService;
			$this->request           = $request;
			$this->serverResponse    = $serverResponse;
		}
		
		
		public function stop()
		{
			$name = $this->request->input ('name');
			
			$status = $this->supervisorService->stop ($name);
			
			if ($status) {
				return $this->serverResponse->createSuccessMsg ('已停止');
			}
			
			return response ()->json ([
				'code'    => 0,
				'message' => '无需停止',
			]);
			
		}
		
		public function start()
		{
			$name = $this->request->input ('name');
			
			$status = $this->supervisorService->start ($name);
			
			if ($status) {
				return response ()->json ([
					'code'    => 200,
					'message' => '已启动',
				]);
			}
			
			return response ()->json ([
				'code'    => 0,
				'message' => '无需启动',
			]);
			
		}
		
		public function startAll()
		{
			$status = $this->supervisorService->startAll ();
			
			if ($status) {
				return response ()->json ([
					'code'    => 200,
					'message' => '已启动',
				]);
			}
			
			return response ()->json ([
				'code'    => 0,
				'message' => '无需启动',
			]);
		}
		
		public function stopAll()
		{
			$status = $this->supervisorService->stopAll ();
			
			if ($status) {
				return response ()->json ([
					'code'    => 200,
					'message' => '已停止',
				]);
			}
			
			return response ()->json ([
				'code'    => 0,
				'message' => '无需停止',
			]);
		}
	}