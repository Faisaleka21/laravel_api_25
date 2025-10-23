<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Authors::create([
            "name"=> "TIO",
            "birthdate"=> "2025-10-23",
        ]);

        $names = ["Anda", "Nabi", "Dada", "Paha", "Waktu"];
        for ($i = 0; $i < 5; $i++) {
            Authors::create([
                "name"=> $names[$i],
                "birthdate"=> "2025-10-23",
            ]);
        }
    }
}
