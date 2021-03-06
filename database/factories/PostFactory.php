<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(3),
            'body'=>$this->faker->sentence(25),
            'slug'=>$this->faker->sentence(2),
            'image'=> $this->faker->image('public/upload/images', 400, 300, null, false),
              'category_id' =>$this->faker->randomElement(Category::pluck('id')->toArray())



        ];
    }
}
