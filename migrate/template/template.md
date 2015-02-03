<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Create$modelTable extends Migration {

	public function up()
	{
		Schema::create('$tableName', function(Blueprint $table) {
			$fields
		});
	}

	public function down()
	{
		Schema::drop('$tableName');
	}
}