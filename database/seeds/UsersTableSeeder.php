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
        $faker = Faker\Factory::create();
        for($i=0;$i<50;$i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'sex' => 'f',
                'phone' => $faker->phoneNumber,
                'pesel' => $faker->randomDigit,
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
