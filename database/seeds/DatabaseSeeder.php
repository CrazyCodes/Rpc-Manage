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
			$this->call (ManageMenuOperateTableSeeder::class);
		}
	}
	
	
	
	
	
