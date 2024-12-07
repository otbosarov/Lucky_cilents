<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cilent>
 */
class CilentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $strings = array(
        //     'male',
        //     'female'
        // );
        // $key = array_rand($strings);
        return [
            // 'client_name' => fake()->name(),
            // 'workplace' => fake()->streetName(),
            // 'client_salary' => rand(1000000,10000000),
            // 'age' => rand(18,70),
            // 'gender' =>$strings[$key]
        ];
    }
}
