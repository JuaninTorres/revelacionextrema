<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use RevExtrema\Entities\Information;

class InformationTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
            $titulo = $faker->text(30);
			Information::create([
                'titulo' => $titulo,
                'texto' => $faker->text(200),
                'fecha' => $faker->dateTime,
                'user_id' => $faker->numberBetween(1,11),
                'slug' => \Str::slug($titulo),
                'image_url' => '/images/demo_noticia.jpg'
			]);
		}
	}

}