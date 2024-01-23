<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('pizzas')->insert([
            [
                'name' => 'Margherita',
            ],
            [
                'name' => 'Peperroni',
            ],
            [
                'name' => 'Quattro Formaggi',
            ],
            [
                'name' => 'Chicken BBQ',
            ],
            [
                'name' => 'Hawaiian',
            ],


        ]);
    }
}
