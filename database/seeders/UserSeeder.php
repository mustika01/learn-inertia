<?php

namespace Database\Seeders;

use App\Models\User;
use App\Support\DefaultRoles;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jack = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $jack->assignRole(DefaultRoles::ADMIN);

        $jack = User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ]);

        $jack->assignRole(DefaultRoles::USER);

    }
}
