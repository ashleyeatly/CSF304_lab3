<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\Person::factory(50) ->create([
//            'title' => 'Test Title 1',
//            'firstname' => 'First name 1',
//            'surname' => 'SurName 1',
//            'address' => 'Address 1 where 1',
//            'date_of_birth' => date('2010-03-31'),
//            'current' => true,
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
        \App\Models\Person::factory(50) ->create();

    }
}
