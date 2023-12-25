<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['سحب','ايداع'];
        $current = $type[rand(0,1)]; 
        return [
            'user_id'=>User::inRandomOrder()->first()->id,
            'title'=>$this->faker->name(),
            'type'=>$current,
            'amount'=>$current=='سحب'?-rand(100,200):rand(100,200),
            'note'=>$this->faker->text(),
            'transaction_date'=>date('Y-m-'.rand(1,29))
        ];
    }
}
