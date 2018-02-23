<?php
	
	namespace App\Presenters;
	
	use PhpXmlRpc\Client;
	use PhpXmlRpc\Encoder;
	use PhpXmlRpc\Value;
	
	class SupervisorPresenter
	{
		private $client;
		private $encoder;
		
		public function __construct(Encoder $encoder)
		{
			$this->client  = new Client(env ('XML_PRC_URL'));
			$this->encoder = $encoder;
		}
		
		/**
		 * @content 获得所有进程信息
		 * @return array|bool
		 */
		public function getAllProcessInfo()
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.getAllProcessInfo'));
			
			$data = $this->encoder->decode ($response->value ());
			
			return $data;
		}
		
		/**
		 * @param $name @节点名称
		 *
		 * @content 获取进程信息
		 * @return mixed
		 */
		public function getProcessInfo($name)
		{
			$response = $this->client->send (new \PhpXmlRpc\Request('supervisor.getProcessInfo', [
				new Value($name),
			]));
			
			$data = $this->encoder->decode ($response->value ());
			
			return $data;
		}
		
	}