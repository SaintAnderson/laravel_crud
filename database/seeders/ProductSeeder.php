<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Print_;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)->create()->each(function ($product) {
            $category = Category::inRandomOrder()->take(rand(1, 2))->pluck('id');
            $product->categories()->attach($category);
        });
    }
}
