<?php

namespace Database\Seeders;

use App\Models\Cilent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class CilentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Request $request): void
    {
        Cilent::create([
            'client_name' => "Salom",
            'workplace' => "test",
            'client_salary' => 9000000,
            'age' => 22,
            'gender' => "male"
        ]);
        // Cilent::factory()
        // ->count(5)
        // ->create();
    }
}
