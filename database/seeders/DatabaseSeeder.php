<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

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
                'image_path' => 'https://images.newyorkpizza.nl/Products/Original/Margherita-9585.png',
            ],
            [
                'name' => 'Peperroni',
                'image_path' => 'https://images.newyorkpizza.nl/Products/Original/Brooklyn_Style_Pizza_-9600.png',
            ],
            [
                'name' => 'Quattro Formaggi',
                'image_path' => 'https://images.newyorkpizza.nl/Products/Original/Quattro-Formaggi-9587.png',
            ],
            [
                'name' => 'Chicken BBQ',
                'image_path' => 'https://images.newyorkpizza.nl/Products/Original/Hete_Kip-9757.png',
            ],
            [
                'name' => 'Hawaiian',
                'image_path' => 'https://images.newyorkpizza.nl/Products/Original/hawaii-9605.png',
            ],

        ]);

        DB::table('ingredients')->insert([
            ['name' => 'Dough', 'unit' => 'pieces'],
            ['name' => 'Tomato Sauce', 'unit' => 'cups'],
            ['name' => 'Pepperoni', 'unit' => 'pieces'],
            ['name' => 'Mozzarella Cheese', 'unit' => 'grams'],
            ['name' => 'Parmesan Cheese', 'unit' => 'grams'],
            ['name' => 'Olive Oil', 'unit' => 'tablespoons'],
            ['name' => 'Chicken', 'unit' => 'grams'],
            ['name' => 'Pineapple', 'unit' => 'pieces'],
            ['name' => 'Onions', 'unit' => 'pieces'],
            ['name' => 'Green Peppers', 'unit' => 'pieces'],
            ['name' => 'BBQ Sauce', 'unit' => 'cups'],
        ]);

        DB::table('pizza_ingredients')->insert([
            ['pizza_id' => 1, 'ingredient_id' => 1, 'quantity' => 1], // Margherita with 1 Dough
            ['pizza_id' => 1, 'ingredient_id' => 2, 'quantity' => 1], // Margherita with 1 Tomato Sauce
            ['pizza_id' => 1, 'ingredient_id' => 4, 'quantity' => 100], // Margherita with 100g Mozzarella Cheese
            ['pizza_id' => 1, 'ingredient_id' => 5, 'quantity' => 50], // Margherita with 50g Parmesan Cheese
            ['pizza_id' => 1, 'ingredient_id' => 6, 'quantity' => 1], // Margherita with 1 Olive Oil

            ['pizza_id' => 2, 'ingredient_id' => 1, 'quantity' => 1], // Peperroni with 1 Dough
            ['pizza_id' => 2, 'ingredient_id' => 2, 'quantity' => 1], // Peperroni with 1 Tomato Sauce
            ['pizza_id' => 2, 'ingredient_id' => 3, 'quantity' => 10], // Peperroni with 10 Pepperoni
            ['pizza_id' => 2, 'ingredient_id' => 4, 'quantity' => 100], // Peperroni with 100g Mozzarella Cheese
            ['pizza_id' => 2, 'ingredient_id' => 5, 'quantity' => 50], // Peperroni with 50g Parmesan Cheese
            ['pizza_id' => 2, 'ingredient_id' => 6, 'quantity' => 1], // Peperroni with 1 Olive Oil
            ['pizza_id' => 3, 'ingredient_id' => 1, 'quantity' => 1], // Quattro Formaggi with 1 Dough
            ['pizza_id' => 3, 'ingredient_id' => 2, 'quantity' => 1], // Quattro Formaggi with 1 Tomato Sauce
            ['pizza_id' => 3, 'ingredient_id' => 4, 'quantity' => 100], // Quattro Formaggi with 100g Mozzarella Cheese
            ['pizza_id' => 3, 'ingredient_id' => 4, 'quantity' => 100], // Quattro Formaggi with 100g Mozzarella Cheese
            ['pizza_id' => 3, 'ingredient_id' => 4, 'quantity' => 100], // Quattro Formaggi with 100g Mozzarella Cheese
            ['pizza_id' => 3, 'ingredient_id' => 4, 'quantity' => 100], // Quattro Formaggi with 100g Mozzarella Cheese
            ['pizza_id' => 3, 'ingredient_id' => 5, 'quantity' => 50], // Quattro Formaggi with 50g Parmesan Cheese
            ['pizza_id' => 3, 'ingredient_id' => 6, 'quantity' => 1], // Quattro Formaggi with 1 Olive Oil
            ['pizza_id' => 4, 'ingredient_id' => 1, 'quantity' => 1], // Chicken BBQ with 1 Dough
            ['pizza_id' => 4, 'ingredient_id' => 2, 'quantity' => 1], // Chicken BBQ with 1 Tomato Sauce
            ['pizza_id' => 4, 'ingredient_id' => 7, 'quantity' => 100], // Chicken BBQ with 100g Chicken
            ['pizza_id' => 4, 'ingredient_id' => 8, 'quantity' => 100], // Chicken BBQ with 100g Pineapple
            ['pizza_id' => 4, 'ingredient_id' => 9, 'quantity' => 50], // Chicken BBQ with 50g Onions
            ['pizza_id' => 4, 'ingredient_id' => 10, 'quantity' => 50], // Chicken BBQ with 50g Green Peppers
            ['pizza_id' => 4, 'ingredient_id' => 11, 'quantity' => 1], // Chicken BBQ with 1 BBQ Sauce
            ['pizza_id' => 4, 'ingredient_id' => 6, 'quantity' => 1], // Chicken BBQ with 1 Olive Oil
            ['pizza_id' => 5, 'ingredient_id' => 1, 'quantity' => 1], // Hawaiian with 1 Dough
            ['pizza_id' => 5, 'ingredient_id' => 2, 'quantity' => 1], // Hawaiian with 1 Tomato Sauce
            ['pizza_id' => 5, 'ingredient_id' => 7, 'quantity' => 100], // Hawaiian with 100g Chicken
            ['pizza_id' => 5, 'ingredient_id' => 8, 'quantity' => 100], // Hawaiian with 100g Pineapple
            ['pizza_id' => 5, 'ingredient_id' => 9, 'quantity' => 50], // Hawaiian with 50g Onions
            ]);
    }
}
