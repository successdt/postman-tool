
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersranksTable extends Migration {

	public function up()
	{
		Schema::create('users_ranks', function(Blueprint $table) {
			 =
		});
	}

	public function down()
	{
		Schema::drop('users_ranks');
	}
}