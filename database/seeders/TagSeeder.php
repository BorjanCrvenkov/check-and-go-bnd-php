<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Tag::factory()
            ->count(24)
            ->sequence(
                ['name' => 'Drink'],
                ['name' => 'Food'],
                ['name' => 'Desert'],
                ['name' => 'Vegetables'],
                ['name' => 'Fruits'],
                ['name' => 'Fish'],
                ['name' => 'Seafood'],
                ['name' => 'Vegan'],
                ['name' => 'Meat'],
                ['name' => 'Dairy'],
                ['name' => 'Non-dairy'],
                ['name' => 'Fine Dining'],
                ['name' => 'Casual Dining'],
                ['name' => 'Family Style'],
                ['name' => 'Fast Food'],
                ['name' => 'Cafe'],
                ['name' => 'Buffet'],
                ['name' => 'Bar'],
                ['name' => 'Pub'],
                ['name' => 'Coffee House'],
                ['name' => 'Burgers'],
                ['name' => 'Non-alcoholic drinks'],
                ['name' => 'Alcoholic drinks'],
                ['name' => 'Hot drinks'],
            )
            ->create();
    }
}
