<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory()->create([
            'name' => 'Mycie'
        ]);

        Service::factory()->create([
            'name' => 'Odkuranie'
        ]);

        Service::factory()->create([
            'name' => 'Polerowanie'
        ]);
    }
}
