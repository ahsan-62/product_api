<?php

namespace Database\Seeders;

use App\Models\Tax;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Unit;
use App\Models\User;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Warehouse;
use App\Models\Attachment;
use App\Models\ProductQuantity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        Brand::factory(10)->create();
        Category::factory(10)->create();
        Unit::factory(10)->create();
        Tax::factory(10)->create();
        Warehouse::factory(10)->create();
        Product::factory(50)->create()->each(function ($product) {
            ProductQuantity::factory(3)->create(['product_id' => $product->id]);
            Attachment::factory(2)->create([
                'attachable_id' => $product->id,
                'attachable_type' => Product::class,
            ]);
        });
    }
}
