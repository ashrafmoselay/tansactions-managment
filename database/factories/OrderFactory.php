<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['عمالة','زيارة'];
        return [
            'customer_id'=>Customer::inRandomOrder()->first()->id,
            'status_id'=>Status::inRandomOrder()->first()->id,
            'created_date'=>$this->faker->date('Y-m-d',now()->addYear()),
            'type'=>$type[rand(0,1)],
            'record_no'=>rand(100,1000),
            'alkafil_name'=>$this->faker->name(),
            'visa_number'=>random_int(10000,4000000),
            'job'=>$this->faker->jobTitle(),
            'total'=>rand(1000,5000),
            'note'=>$this->faker->text(20),
            'alert_date'=>$this->faker->date('Y-m-d',now()->addYear())
        ];
    }
}
