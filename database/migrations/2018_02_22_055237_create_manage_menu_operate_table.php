<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateManageMenuOperateTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('manage_menu_operate', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('name', 30)->comment ('菜单名称');
				$table->string ('params', 30)->nullable ()->comment ('参数');
				$table->string ('url', 100)->nullable ()->comment ('地址');
				$table->integer ('manage_menu_id')->comment ('绑定的菜单id');
				
				$table->timestamps ();
				
				$table->unique (['name']);
				$table->index (['name', 'url']);
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists ('manage_menu_operate');
		}
	}
