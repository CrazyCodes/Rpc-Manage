<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateManageMenuTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('manage_menu', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('name',30)->comment ('菜单名称');
				$table->integer ('pid')->default (0)->comment ('父子级');
				$table->string ('url',100)->nullable ()->comment ('地址');
				$table->string ('icon')->nullable ()->comment ('图标');
				$table->integer ('sort')->default (0)->comment ('排序');
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
			Schema::dropIfExists ('manage_menu');
		}
	}
