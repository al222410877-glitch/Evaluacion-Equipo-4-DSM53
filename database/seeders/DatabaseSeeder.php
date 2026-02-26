<?php

namespace Database\Seeders;

use App\Models\ComidaEquipo4;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        ComidaEquipo4::factory(10)->create();
    }
}
