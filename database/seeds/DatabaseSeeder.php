<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

//        DB::table('users')->truncate();
        $this->call(UsersTableSeeder::class);

//        DB::table('adverts')->truncate();
        $this->call(AdvertsTableSeeder::class);
    }
}
