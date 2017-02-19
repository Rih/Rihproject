<?php

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
        //
         $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('user')->insert([ //,
                'username' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->phoneNumber,
                'type' => $faker->randomElement($array = array ('user','admin')),
            ]);
        }
    }
}
