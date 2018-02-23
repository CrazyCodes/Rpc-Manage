<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateRegistryTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('registry', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('description', 255)->nullable ()->comment ('描述');
				$table->string ('title', 20)->comment ('标题');
				$table->string ('ip', 30)->comment ('rpc地址');
				$table->string ('name', 30)->unique ()->comment ('supervisor 名称');
				$table->integer ('weight')->default (10)->comment ('权重');
				$table->integer ('group_id')->default (0)->comment ('所属群组');
				$table->timestamps ();
				$table->softDeletes ();
				
				$table->index (['title', 'name', 'ip']);
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists ('registry');
		}
	}
