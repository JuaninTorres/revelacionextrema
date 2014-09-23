<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AnnouncerTableSeeder');
		// $this->call('BroadcastTableSeeder');
		$this->call('InformationTableSeeder');
	}

}
