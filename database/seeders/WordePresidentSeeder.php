<?php

namespace Database\Seeders;

use App\Models\WordPresident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordePresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WordPresident::factory()->create();
    }
}