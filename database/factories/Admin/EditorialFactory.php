<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

class EditorialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'owner'=>$this->faker->name(),
            'direction'=>$this->faker->name(),
            'status'=>$this->faker->numberBetween(1,2)
        ];
    }
}
