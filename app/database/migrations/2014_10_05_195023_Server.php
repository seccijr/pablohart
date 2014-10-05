<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Server extends Migration {
	public function up() {
        Schema::create('server', function($table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->string('value');
            $table->timestamps();
        });
	}

	public function down() {
        Schema::drop('server');
	}
}
