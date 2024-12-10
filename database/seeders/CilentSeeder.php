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
            'client_name' => "vali",
            'workplace' => "maktab",
            'client_salary' => 9000000,
            'age' => 22,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "charos",
            'workplace' => "bog'cha",
            'client_salary' => 8000000,
            'age' => 21,
            'gender' => "female"
        ]);
        Cilent::create([
            'client_name' => "hasan",
            'workplace' => "ishxona",
            'client_salary' => 7000000,
            'age' => 25,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "zuhra",
            'workplace' => "tashkilot",
            'client_salary' => 6000000,
            'age' => 28,
            'gender' => "female"
        ]);
        Cilent::create([
            'client_name' => "husan",
            'workplace' => "kredit magazin",
            'client_salary' => 5000000,
            'age' => 33,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "fotima",
            'workplace' => "test",
            'client_salary' => 4000000,
            'age' => 35,
            'gender' => "female"
        ]);
        Cilent::create([
            'client_name' => "soli",
            'workplace' => "qurilish ",
            'client_salary' => 3000000,
            'age' => 56,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "nozi",
            'workplace' => "gozallik salan",
            'client_salary' => 8300000,
            'age' => 17,
            'gender' => "female"
        ]);
        Cilent::create([
            'client_name' => "salim",
            'workplace' => "shafyor",
            'client_salary' => 6700000,
            'age' => 43,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "ezoz",
            'workplace' => "tozalik",
            'client_salary' => 8800000,
            'age' => 39,
            'gender' => "female"
        ]);
        Cilent::create([
            'client_name' => "sattor",
            'workplace' => "kamtet",
            'client_salary' => 2500000,
            'age' => 58,
            'gender' => "male"
        ]);
        Cilent::create([
            'client_name' => "Oisha",
            'workplace' => "pensiyoner",
            'client_salary' => 1800000,
            'age' => 76,
            'gender' => "female"
        ]);

        // Cilent::factory()
        // ->count(5)
        // ->create();
    }
}
