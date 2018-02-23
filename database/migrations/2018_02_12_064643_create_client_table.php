<?php
	
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateClientTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create ('client', function (Blueprint $table) {
				$table->increments ('id');
				$table->string ('ip', 25)->comment ('ip地址');
				$table->integer ('port')->comment ('端口');
				$table->string ('name', 30)->comment ('客户端名称');
				$table->string ('domain', 25)->unique ()->comment ('对外访问域名');
				$table->string ('rules')->comment ('群组权限');
				$table->timestamps ();
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists ('client');
		}
	}
