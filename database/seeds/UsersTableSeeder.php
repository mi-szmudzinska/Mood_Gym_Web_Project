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
        \App\User::truncate();
        $faker = Faker\Factory::create();
        for($i=0;$i<50;$i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'sex' => 'f',
                'phone' => $faker->phoneNumber,
                'pesel' => $faker->randomDigit,
                'role' => 'user',
                'password' => bcrypt('secret'),
            ]);
        }
        DB::table('users')->insert([
            'name' => 'Sample',
            'lastName' => 'Example',
            'email' => "admin@gmail.com",
            'sex' => 'f',
            'phone' => $faker->phoneNumber,
            'pesel' => $faker->randomDigit,
            'role' => 'admin',
            'password' => bcrypt('secret'),
        ]);
    }
}
