<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBroadcastsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('broadcasts', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('announcer_id')->unsigned();
            $table->timestamp('tiempo_desde')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tiempo_hasta')->nullable();
            $table->foreign('announcer_id')->references('id')->on('announcers')->onDelete('cascade');
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
		Schema::drop('broadcasts');
	}

}
