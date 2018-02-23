<?php
	
	namespace App\Presenters;
	
	use App\Models\Client;
	
	class ClientPresenter
	{
		private $client;
		
		public function __construct(Client $client)
		{
			$this->client = $client;
		}
		
		public function getClientList()
		{
			$rowResult = $this->client->get ();
			
			return $rowResult;
		}
		
		public function getClientInfoToId($clientId)
		{
			$result = $this->client->where ([
				['id', '=', $clientId],
			])->first ();
			
			return $result;
		}
	}