<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateUserGroupTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('user_group', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('name', 30)->unique ()->comment ('群组名称');
				$table->integer ('sort')->default (0)->comment ('排序');
				$table->integer ('status')->default (0)->comment ('状态 0 => 正常 -1=>禁止登录');
				$table->string ('menu_permis',255)->nullable ()->comment ('菜单权限');
				$table->string ('operate_permis',255)->nullable ()->comment ('操作权限');
				$table->timestamps ();
				
				$table->index (['name']);
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists ('user_group');
		}
	}
