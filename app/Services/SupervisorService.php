<?php
	
	namespace App\Services;
	
	use PhpXmlRpc\Client;
	use PhpXmlRpc\Encoder;
	use PhpXmlRpc\Value;
	
	class SupervisorService
	{
		private $client;
		private $encoder;
		
		public function __construct(Encoder $encoder)
		{
			$this->client  = new Client(env ('XML_PRC_URL'));
			$this->encoder = $encoder;
		}
		
		/**
		 * @param $name
		 *
		 * @content 停止进程
		 * @return bool|mixed
		 */
		public function stop($name)
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.stopProcess', [
				new Value($name),
			]));
			
			if (!$response->value ()) {
				return false;
			}
			
			$status = $this->encoder->decode ($response->value ());
			
			if ($status) {
				return $status;
			}
			
			return false;
		}
		
		/**
		 * @param $name
		 *
		 * @content 启动进程
		 * @return bool|mixed
		 */
		public function start($name)
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.startProcess', [
				new Value($name),
			]));
			
			if (!$response->value ()) {
				return false;
			}
			
			$status = $this->encoder->decode ($response->value ());
			
			if ($status) {
				return $status;
			}
			
			return false;
		}
		
		/**
		 * @content 启动所有进程
		 * @return bool|mixed
		 */
		public function startAll()
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.startAllProcesses'));
			
			if (!$response->value ()) {
				return false;
			}
			
			$status = $this->encoder->decode ($response->value ());
			
			if ($status) {
				return $status;
			}
			
			return false;
		}
		
		/**
		 * @content 停止所有进程
		 * @return bool|mixed
		 */
		public function stopAll()
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.stopAllProcesses'));
			
			if (!$response->value ()) {
				return false;
			}
			
			$status = $this->encoder->decode ($response->value ());
			
			if ($status) {
				return $status;
			}
			
			return false;
		}
	}