<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->developer()->create();
    }
}
