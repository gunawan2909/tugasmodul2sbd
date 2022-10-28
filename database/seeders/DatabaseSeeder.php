<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\hp::create([
            "name" => "A72",
            "kind" => "Phone",
            "price" => "Rp. 5.000.000",
            "id_merek" => 1

        ]);
        \App\Models\hp::create([
            "name" => "A73",
            "kind" => "Phone",
            "price" => "Rp. 5.000.000",
            "id_merek" => 1
        ]);
        \App\Models\hp::create([
            "name" => "A74",
            "kind" => "Phone",
            "price" => "Rp. 5.000.000",
            "id_merek" => 1

        ]);
        \App\Models\merek::create([
            "name" => "Samsung",
            "yers" => "2000",
            "country" => "Korea Selatan",


        ]);
        \App\Models\merek::create([
            "name" => "Invinix",
            "yers" => "2017",
            "country" => "RRC",


        ]);
    }
}
