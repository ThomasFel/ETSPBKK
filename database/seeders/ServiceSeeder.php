<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(['service_name' => 'Custom Plugin WordPress']);
        Service::create(['service_name' => 'Custom Theme WordPress']);
        Service::create(['service_name' => 'WordPress Design']);
        Service::create(['service_name' => 'Deploy WordPress']);
        Service::create(['service_name' => 'Backup and Restore WordPress']);
        Service::create(['service_name' => 'Pentest WordPress']);
    }
}
