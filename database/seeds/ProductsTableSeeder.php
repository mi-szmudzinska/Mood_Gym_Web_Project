<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            DB::table('products')->insert([
                'name' => $faker->randomElement(['Dieta podstawowa', 'Dieta vegańska', 'Dieta wegetariańska','Dieta na przyrost tkanki mięśniowej', 'Dieta na redukcje tkanki tłuszczowej']),
                'desc' => $faker->text(100),
                'category_id' => 1,
                'price' => $faker->randomNumber(2),
                'additional_information' => 'Dodatkowe informacje',
            ]);
        }
    }
}
