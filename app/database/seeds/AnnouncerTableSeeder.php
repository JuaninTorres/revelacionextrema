<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use RevExtrema\Entities\User;
use RevExtrema\Entities\Announcer;

class AnnouncerTableSeeder extends Seeder {

	public function run()
	{
        $user = User::create([
            'first_name' => 'Administrador',
            'last_name' => 'General',
            'display_name' => 'Admin',
            'email' => 'juanin.torres@gmail.com',
            'password' => \Hash::make(123456),
            'type' => 'admin',
        ]);
        Announcer::create([
            'id' => $user->id,
            'nick_name' => 'Admin',
            'slug' => 'admin',
        ]);

		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $displayName = "{$firstName} {$lastName}";
            $user = User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'display_name' => $displayName,
                'email' => $faker->email,
                'password' => \Hash::make(123456),
                'type' => 'locutor',
            ]);

			Announcer::create([
                'id' => $user->id,
                'nick_name' => $faker->userName,
                'residencia' => $faker->city.', '.$faker->country,
                'website_url' => $faker->url,
                'twitter_url' => $faker->url,
                'facebook_url' => $faker->url,
                'youtube_url' => $faker->url,
                'timezone' => $faker->timezone,
                'fecha_nacimiento' => $faker->dateTime,
                'slug' => \Str::slug($displayName),
			]);
		}
	}

}