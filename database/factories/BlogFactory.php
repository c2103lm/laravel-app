<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'desr' => $this->faker->text,
            'image' => 'https://cuongthach.com/wp-content/uploads/2018/09/Blog-la-gi.jpg',
            // 'image' => $this->faker->image(public_path('uploads'),640,480, null, false),
            // 'category_id' => function () {
            //     return factory(App\Models\Category::class)->create()->id;
            // }, 
        ];
    }
}

