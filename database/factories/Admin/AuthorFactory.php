<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'nickName'=>$this->faker->name(),
            'nationality'=>$this->faker->state(),
            'yearBirth'=>$this->faker->date(),
        ];
    }
}
