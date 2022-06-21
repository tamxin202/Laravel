<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $limit = 100;
        for ($i = 0; $i < $limit; $i++){
            DB::table('Productss')->insert([
                'name' => $fake->name,
                'image' => $fake->imageUrl($width = 200, $height = 200),
                'description' => $fake->sentence(15),
                'quantity' => $fake->numerify($string = '###'),
                'date'=>$fake->date("Y-m-d H:i:s")
            ]);
        }
        //
    }
}
