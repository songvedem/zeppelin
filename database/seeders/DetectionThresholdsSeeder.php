<?php

namespace Database\Seeders;

use App\Models\DetectionThreshold;
use Illuminate\Database\Seeder;

class DetectionThresholdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetectionThreshold::create([
            'time_interval' => 600,
            'bandwidth' => 200,
            'status' => 404,
            'status_frequency' => 100,
        ]);
    }
}
