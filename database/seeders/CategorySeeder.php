<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the categories
        $categories = [
            'Womens Clothing',
            'Mens Clothing',
            'Institutional Apparel',
            'Hoodies',
            'Plus Size Clothing For Mens & Womens',
            'Womens Party Wear Clothing',
        ];

        // Insert the categories into the database
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'slug' => Str::slug($category),
                'name' => $category,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
