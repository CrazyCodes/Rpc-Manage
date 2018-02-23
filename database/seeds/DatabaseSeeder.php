<?php
	
	use Illuminate\Database\Seeder;
	use App\Models;
	
	class DatabaseSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			$this->call (ManageMenuTableSeeder::class);
		}
	}
	
	class ManageMenuTableSeeder extends Seeder
	{
		public function run()
		{
			$row = [
				[
					'id'   => 1,
					'name' => '系统设置',
					'pid'  => 0,
				],
				[
					'id'   => 2,
					'name' => '菜单管理',
					'pid'  => 1,
				],
				[
					'id'   => 3,
					'name' => '服务列表',
					'pid'  => 0,
				],
				[
					'id'   => 4,
					'name' => '服务治理',
					'pid'  => 0,
				],
				[
					'id'   => 5,
					'name' => '查询测试',
					'pid'  => 0,
				],
			];
			
			foreach ($row as $key => $value) {
				$manageMenu = new Models\ManageMenu();
				
				$manageMenu->name = $value['name'];
				$manageMenu->id   = $value['id'];
				$manageMenu->pid  = $value['pid'];
				$manageMenu->save ();
				
			}
		}
	}
	
	
	
