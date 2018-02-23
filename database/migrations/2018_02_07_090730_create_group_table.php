<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateGroupTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('group', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('name', 55)->unique ()->comment ('群组名称');
				$table->string ('title', 55)->unique ()->comment ('标题');
				$table->string ('description', 255)->nullable ()->comment ('描述');
				$table->softDeletes ();
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
			Schema::dropIfExists ('group');
		}
	}
