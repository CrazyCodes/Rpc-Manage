<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateServiceTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('service', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('service_name', 50)->comment ('服务名称');
				$table->string ('function', 50)->unique ()->comment ('服务方法');
				$table->string ('params')->comment ('请求参数');
				$table->string ('response')->comment ('相应参数');
				$table->string ('description')->nullable ()->comment ('描述');
				
				$table->integer ('group_id')->comment ('群组ID');
				
				$table->timestamps ();
				$table->softDeletes ();
				
				$table->index (['service_name']);
				
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists ('service');
		}
	}
