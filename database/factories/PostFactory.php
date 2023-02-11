<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'category'=>'lifestyle',
            'video_url'=>$this->faker->url(),
            'description'=>$this->faker->paragraph(6),
            'post_url'=>$this->faker->url(),
            'author'=>$this->faker->name(),
            'source'=>$this->faker->url(),
        ];
    }
}
