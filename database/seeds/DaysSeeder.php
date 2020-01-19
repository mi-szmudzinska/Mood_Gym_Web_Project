<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Day::truncate();
        for($i=0;$i<7;$i++){
            DB::table('days')->insert([
                'day_number' => $i,
            ]);
        }
    }
}
