<?php
	
	namespace App\Presenters;
	
	use App\Models\UserGroup;
	use App\User;
	
	class UserPresenter
	{
		private $user, $userGroup;
		
		public function __construct(User $user, UserGroup $userGroup)
		{
			$this->user      = $user;
			$this->userGroup = $userGroup;
		}
		
		public function getUserList()
		{
			return $this->user->get ();
		}
		
		public function getUserGroupList()
		{
			return $this->userGroup->get ();
		}
		
	}