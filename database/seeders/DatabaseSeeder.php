<?php

namespace Database\Seeders;

use App\Models\Ingredients;
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
        $this->call(CategorySeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(IngredientsSeeder::class);
        $this->call(MealSeeder::class);
        $this->call(MealsTagsSeeder::class);
        $this->call(MealsIngredientsSeeder::class);
    }
}
