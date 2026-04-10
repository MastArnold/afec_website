<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_roles')->insert([
            ['id' => 1, 'name' => 'superadmin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'admin',      'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'animator',   'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
