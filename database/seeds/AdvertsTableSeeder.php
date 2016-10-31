<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $upload_path = config('app.upload_path');

        for ($i = 1; $i <= 20; $i++) {
            $user_id       = random_int(1, 5);
            $user_folder   = 'u_' . $user_id;
            $advert_folder = 'adv_' . $i;
            $path          = './public/' . $upload_path . '/' . $user_folder . '/' . $advert_folder;

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $picture = str_replace('./public/', '', $faker->image($path, 480, 320, 'transport'));

            $date = $faker->dateTimeThisMonth();

            DB::table('adverts')->insert([
                'user_id'      => $user_id,
                'title'        => $faker->sentence(5),
                'region'       => $faker->state(),
                'city'         => $faker->city(),
                'manufacturer' => $faker->company(),
                'model'        => $faker->domainWord(),
                'engine'       => random_int(3, 8) / 2,
                'mileage'      => random_int(1000, 1000000),
                'owners'       => random_int(1, 5),
                'picture'      => $picture,
                'created_at'   => $date,
                'updated_at'   => $date,
            ]);
        }
    }
}
