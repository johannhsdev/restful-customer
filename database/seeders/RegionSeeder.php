<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Commune;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['description' => 'Capital', 'status' => 'A'],
            ['description' => 'Los Andes', 'status' => 'A'],
            ['description' => 'Barinas', 'status' => 'A'],
            ['description' => 'Bolívar', 'status' => 'A'],
            ['description' => 'Carabobo', 'status' => 'A'],
            ['description' => 'Cojedes', 'status' => 'A'],
            ['description' => 'Delta Amacuro', 'status' => 'A'],
            ['description' => 'Falcón', 'status' => 'A'],
            ['description' => 'Guárico', 'status' => 'A'],
            ['description' => 'Lara', 'status' => 'A'],
            ['description' => 'Mérida', 'status' => 'A'],
            ['description' => 'Miranda', 'status' => 'A'],
            ['description' => 'Monagas', 'status' => 'A'],
            ['description' => 'Nueva Esparta', 'status' => 'A'],
            ['description' => 'Portuguesa', 'status' => 'A'],
            ['description' => 'Sucre', 'status' => 'A'],
            ['description' => 'Táchira', 'status' => 'A'],
            ['description' => 'Trujillo', 'status' => 'A'],
            ['description' => 'Vargas', 'status' => 'A'],
            ['description' => 'Yaracuy', 'status' => 'A'],
            ['description' => 'Zulia', 'status' => 'A'],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
