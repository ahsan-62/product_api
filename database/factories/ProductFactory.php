<?php

namespace Database\Factories;

use App\Models\Tax;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
            'unit_id' => Unit::factory(),
            'tax_id' => Tax::factory(),
        ];
    }
}
