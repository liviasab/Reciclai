<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PontoColeta>
 */
class PontoColetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->semver(),
            'latitude'=> $this->faker->randomNumber(14),
            'longitude' => $this->faker->randomNumber(14),  
            'pc_emp_id'=> Empresa::all()->random()->id 
        ];
    }
}
