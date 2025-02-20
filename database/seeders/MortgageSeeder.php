<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mortgage;

class MortgageSeeder extends Seeder
{
    public function run(): void
    {
        Mortgage::factory()->count(10)->create();
    }
}