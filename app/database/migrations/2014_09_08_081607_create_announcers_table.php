<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnouncersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('announcers', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('nick_name')->unique();
            $table->string('genero_musical')->nullable();
            $table->string('horarios')->nullable();
            $table->string('residencia')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('website_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('timezone', 30)->default('UTC');
            $table->text('programas')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('fotografia_path')->nullable();
            $table->string('slug')->unique();


			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('announcers');
	}

}
