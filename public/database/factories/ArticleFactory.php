<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string|null
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->unique()->slug(3),
            'description' => $this->faker->paragraph(5),
            'preview_url' => $this->faker->imageUrl(),
            'image_url' => $this->faker->imageUrl(1280, 960),
            'created_at' => $this->faker->date()
        ];
    }
}
