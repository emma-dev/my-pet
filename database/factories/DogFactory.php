<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker ->randomElement(['1', '2', '3', '0,5', '4', '5']),
            'breed' =>$this->faker -> randomElement(['Akita Chow', 'American Foxhound', 'Beaglier', 'Black and Tan Coonhound', 'Bocker', 'Boston Terrier']),
            'thumbnail'=>$this->faker -> image()
        ];
    }
}
