<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();

        return [
            'title' => $this->faker->name,
            'body' =>$this->faker->paragraph,
            'user_id'=>$this->faker->randomElement($users),
            'post_image'=>$this->faker->image(public_path('images'),400,300, null, false) 
        ];
    }
}
