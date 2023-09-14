<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'cnpj'=> $this->faker->randomNumber(14),
            'cep' => $this->faker->randomNumber(8),
            'status' => $this->faker->semver(),   
            'user_id'=> User::all()->random()->id       
        ];
    }
}
