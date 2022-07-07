<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
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
            'editorial_id'=>Editorial::all()->random()->id,
            'yearPublication'=>$this->faker->date(),
            'status'=>$this->faker->numberBetween(1,2)
        ];
    }
}
