<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        $name = $this->faker->unique()->word;
        return [
            'name' => $name,
            // 'slug' => Str::slug($name),
        ];
    }








}
