<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'mobile'=>$this->faker->phoneNumber, 
            'nid'=>rand(100000,9999999),
            'phone'=>$this->faker->phoneNumber,
            'region'=>$this->faker->city
        ];
    }
}
