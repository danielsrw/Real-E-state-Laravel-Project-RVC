<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'Admin'],
            ['name' => 'Client'],
            ['name' => 'Manager'],
            ['name' => 'Secretary'],
            ['name' => 'Accountant'],
            ['name' => 'Technical Member'],
        ]);
    }
}
