<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Commune;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = Region::all();

        $communes = [
            ['description' => 'Caracas', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'Baruta', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'Chacao', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'El Hatillo', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'Libertador', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'Sucre', 'id_reg' => 1, 'status' => 'A'],
            ['description' => 'Anzoátegui', 'id_reg' => 2, 'status' => 'A'],
            ['description' => 'Apure', 'id_reg' => 2, 'status' => 'A'],
            ['description' => 'Barinas', 'id_reg' => 3, 'status' => 'A'],
            ['description' => 'Bolívar', 'id_reg' => 4, 'status' => 'A'],
            ['description' => 'Carabobo', 'id_reg' => 5, 'status' => 'A'],
            ['description' => 'Cojedes', 'id_reg' => 6, 'status' => 'A'],
            ['description' => 'Delta Amacuro', 'id_reg' => 7, 'status' => 'A'],
            ['description' => 'Falcón', 'id_reg' => 8, 'status' => 'A'],
            ['description' => 'Guárico', 'id_reg' => 9, 'status' => 'A'],
            ['description' => 'Lara', 'id_reg' => 10, 'status' => 'A'],
            ['description' => 'Mérida', 'id_reg' => 11, 'status' => 'A'],
            ['description' => 'Miranda', 'id_reg' => 12, 'status' => 'A'],
            ['description' => 'Monagas', 'id_reg' => 13, 'status' => 'A'],
            ['description' => 'Nueva Esparta', 'id_reg' => 14, 'status' => 'A'],
            ['description' => 'Portuguesa', 'id_reg' => 15, 'status' => 'A'],
            ['description' => 'Sucre', 'id_reg' => 16, 'status' => 'A'],
            ['description' => 'Táchira', 'id_reg' => 17, 'status' => 'A'],
            ['description' => 'Trujillo', 'id_reg' => 18, 'status' => 'A'],
            ['description' => 'Vargas', 'id_reg' => 19, 'status' => 'A'],
            ['description' => 'Yaracuy', 'id_reg' => 20, 'status' => 'A'],
            ['description' => 'Zulia', 'id_reg' => 21, 'status' => 'A'],
        ];

        foreach ($communes as $commune) {
            Commune::create($commune);
        }
    }
}
