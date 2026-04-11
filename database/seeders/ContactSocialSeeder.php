<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSocialSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contact_socials')->insert([
            [
                'name'       => 'instagram',
                'url'        => 'https://www.instagram.com/ong_afec/',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'facebook',
                'url'        => 'https://www.facebook.com/100094199947739/',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'linkedin',
                'url'        => 'https://bf.linkedin.com/in/afec-ong-0697b5281',
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
