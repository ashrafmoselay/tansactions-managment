<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Customer;
use App\Models\Fee;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        truncateTables('transactions');
        truncateTables('transfers');
        //User::factory(5)->create();
        Transaction::factory(100)->create();
        Transfer::factory(100)->create();
        // truncateTables('collections');
        
        // DB::table('statuses')->insert([
        //     ['name'=>'مسدد'],
        //     ['name'=>'غير مسدد'],
        //     ['name'=>'جديد'],
        // ]);
        // Customer::factory(3)->create();
        // Order::factory(5)->create();
        // Collection::factory(3)->create();
        // Fee::factory(4)->create();
        
    }
}
