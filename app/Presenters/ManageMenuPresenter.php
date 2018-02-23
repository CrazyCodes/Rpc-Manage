<?php
	
	namespace App\Presenters;
	
	use App\Models\ManageMenu;
	use App\Models\ManageMenuOperate;
	use Illuminate\Support\Facades\Request;
	
	class ManageMenuPresenter
	{
		private $manageMenu, $manageMenuOperate;
		
		public function __construct(ManageMenu $manageMenu, ManageMenuOperate $manageMenuOperate)
		{
			$this->manageMenu        = $manageMenu;
			$this->manageMenuOperate = $manageMenuOperate;
		}
		
		/**
		 * @content 导航展示
		 * @return mixed
		 */
		public function getManageMenuListForSecondLevel()
		{
			$uriPath = '/' . Request::path ();
			
			$topLevel = $this->manageMenu->where ([
				['pid', '=', 0],
			])->get ()->toArray ();
			
			foreach ($topLevel as $key => $value) {
				
				$second = $this->manageMenu->where ([
					['pid', '=', $value['id']],
				])->get ()->toArray ();
				
				
				if ($second) {
					foreach ($second as $k => $item) {
						$operateExtis = $this->manageMenuOperate->where ([
							['manage_menu_id', '=', $item['id']],
							['url', '=', $uriPath],
						])->count ();
						
						
						if ($item['url'] == $uriPath || $operateExtis > 0) {
							$topLevel[$key]['open']   = true;
							$second[$k]['open']       = true;
							$topLevel[$key]['second'] = $second;
							
							
							continue 2;
						} else {
							$topLevel[$key]['open']   = false;
							$second[$k]['open']       = false;
							$topLevel[$key]['second'] = $second;
							
							
						}
					}
					
					
				} else {
					$topLevel[$key]['open']   = false;
					$topLevel[$key]['second'] = [];
				}
				
			}
			
			return $topLevel;
		}
		
		/**
		 * @content form专用
		 * @return mixed
		 */
		public function getManageMenuListToFrom()
		{
			$topLevel = $this->manageMenu->where ([
				['pid', '=', 0],
			])->get ()->toArray ();
			
			foreach ($topLevel as $key => $value) {
				
				$topLevel[$key]['second'] = $this->manageMenu->where ([
					['pid', '=', $value['id']],
				])->get ()->toArray ();
				
			}
			
			return $topLevel;
		}
		
		/**
		 * @content 菜单管理
		 * @return mixed
		 */
		public function getManageMenuListToAdminView()
		{
			$topLevel = $this->manageMenu->where ([
				['pid', '=', 0],
			])->get ()->toArray ();
			
			foreach ($topLevel as $key => $value) {
				$second = $this->manageMenu->where ([
					['pid', '=', $value['id']],
				])->get ()->toArray ();
				
				foreach ($second as $k => $v) {
					$operateList = $this->manageMenuOperate->where ([
						['manage_menu_id', '=', $v['id']],
					])->get ()->toArray ();
					
					$second[$k]['operate'] = $operateList;
				}
				
				$topLevel[$key]['second'] = $second;
			}
			
			return $topLevel;
		}
		
		public function getManageMenuNameForUrl()
		{
			$uriPath = '/' . Request::path ();
			
			$menu = $this->manageMenu->where ([
				['url', '=', $uriPath],
			])->first ();
			
			if ($menu) {
				return $menu->name;
			}
			
			$operate = $this->manageMenuOperate->where ([
				['url', '=', $uriPath],
			])->first ();
			
			if ($operate) {
				return $operate->name;
			}
			
			return '后台管理首页';
		}
		
		public function getManageMenuTreeForUrl()
		{
			$uriPath = '/' . Request::path ();
			
			$tree = [
				'首页' => url ('/manage/index'),
			];
			
			$menu = $this->manageMenu->where ([
				['url', '=', $uriPath],
			])->first ();
			if ($menu) {
				$tree[$menu->name] = '#';
				
				return $tree;
			}
			
			$operate = $this->manageMenuOperate->where ([
				['url', '=', $uriPath],
			])->first ();
			
			if ($operate) {
				$menu = $this->manageMenu->where ([
					['id', '=', $operate->manage_menu_id],
				])->first ();
				
				$tree[$menu->name] = $menu->url;
				$tree[$operate->name] = '#';
				
				return $tree;
			}
			
			return $tree;
			
			
		}
		
		public function getManageMenuInfoToId($menuId)
		{
			$result = $this->manageMenu->where ([
				['id', '=', $menuId],
			])->first ();
			
			return $result;
		}
		
		
	}