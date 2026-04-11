<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactMessageSubjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contact_message_subjects')->insert([
            ['id' => 1, 'name' => 'Information',     'order' => 0, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Message de don',  'order' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Partenariat',     'order' => 2, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
