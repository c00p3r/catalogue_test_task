<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $date = $faker->dateTimeThisMonth();

            DB::table('users')->insert([
                'email'      => $faker->email(),
                'password'   => bcrypt('secret'),
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }
    }
}
