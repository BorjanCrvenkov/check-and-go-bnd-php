<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::factory()
            ->count(5)
            ->sequence(
                ['name' => Role::ADMINISTRATOR],
                ['name' => Role::BUSINESS],
                ['name' => Role::EMPLOYEE],
                ['name' => Role::CUSTOMER],
                ['name' => Role::DEFAULT],
            )->create();
    }
}
