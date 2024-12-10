<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDevicesSeeder extends Seeder
{
    public function run()
    {
        DB::table('hardware_devices')->insert([
            ['device_name' => 'Logitech G502', 'type' => 'Mouse', 'status' => true, 'center_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['device_name' => 'Razer BlackWidow', 'type' => 'Keyboard', 'status' => true, 'center_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['device_name' => 'HyperX Cloud II', 'type' => 'Headset', 'status' => false, 'center_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
