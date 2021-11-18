<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'nama_category' => $this->faker->title(),
            'slug' => $this->faker->title(),
            'deskripsi' => $this->faker->sentence(),
            'created_by' => $this->faker->date(),
        ];
    }
}
