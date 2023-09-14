<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\PontoColeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PontoColetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            PontoColeta::factory()->create([
                'pc_emp_id' => Empresa::all()->random()->id
            ]);
        }
    }
}
