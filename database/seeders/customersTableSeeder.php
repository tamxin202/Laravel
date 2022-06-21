<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $limit = 15;
        $fake = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('customers')->insert([
                'name' => $fake->name,
                'email' =>$fake->unique->email,
                'phonnumber'=> $fake ->phoneNumber,
                'created_at'=> $fake ->date("Y-m-d H:i:s"),
                'updated_at'=> $fake ->date("Y-m-d H:i:s")
            ]);
        }
    }
       
            
            
            
        //
    }
