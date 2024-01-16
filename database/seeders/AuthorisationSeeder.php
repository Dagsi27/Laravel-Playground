<?php

namespace Database\Seeders;

use App\Models\Authorisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Authorisation::factory()
        ->count(15)
        ->create();
    }
}
