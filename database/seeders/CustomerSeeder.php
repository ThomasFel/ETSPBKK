<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'service_id' => '1',
            'name' => 'Daeho',
            'company_name' => 'Toonily',
            'country' => 'Korea',
            'address' => 'Seoul, Korea',
            'post_code' => '07946',
            'email' => 'daeho@gmail.com',
            'phone_number' => '0821025058048'
        ]);

        Customer::create([
            'service_id' => '2',
            'name' => 'Kosimp',
            'company_name' => 'Kosimp Familia',
            'country' => 'Japan',
            'address' => 'Shibuya, Tokyo, Japan',
            'post_code' => '1500002',
            'email' => 'kosimp@gmail.com',
            'phone_number' => '0123456789'
        ]);
    }
}
