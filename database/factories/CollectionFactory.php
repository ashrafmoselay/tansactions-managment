<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer = Customer::inRandomOrder()->first()->id;
        $order = Order::where('customer_id',$customer)->inRandomOrder()->first()->id;
        if($order){
            return [
                'customer_id'=>$customer,
                'order_id'=>$order,
                'created_date'=>date('Y-0'.rand(1,9).'-0'.rand(1,9)),
                'title'=>$this->faker->title,
                'value'=>rand(100,500)
            ];
        }
    }
}
