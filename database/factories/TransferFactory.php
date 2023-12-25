<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['إنتظار', 'قبول', 'رفض'];
        $from = User::inRandomOrder()->first()->id;
        $to = User::query()->where('id', '<>', $from)->inRandomOrder()->first()->id;
        return [
            'from_user_id' => $from,
            'to_user_id' => $to,
            'amount' => rand(100, 200),
            'status' => $type[rand(0, 2)],
            'status_note' => $this->faker->text(),
        ];
    }
}
