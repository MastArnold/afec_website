<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactAddressSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contact_addresses')->insert([
            [
                'name'       => 'Siège de Bobo-Dioulasso',
                'email'      => 'sec_dilao@lasalle.org',
                'phone'      => '(226) 20 97 75 39 / 02 84 40 00',
                'address'    => 'Secteur 12 Niéneta, Bobo-Dioulasso | 01BP461 Bobo-Dioulasso 01',
                'map'        => null,
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Bureau de Ouagadougou',
                'email'      => 'sec_dilao@lasalle.org',
                'phone'      => '(226) 52 57 92 34 ',
                'address'    => 'Avenue de la cathédrale, Ouagadougou',
                'map'        => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2317.3398946038205!2d-1.525252993833774!3d12.363790364191468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e95f4a89a28e9%3A0x70279f8f599a6c1d!2s9F7F%2BQR2%2C%20Rue%20Joseph%20Badoua%2C%20Koulouba%2C%20Ouagadougou!5e0!3m2!1sfr!2sbf!4v1775912786234!5m2!1sfr!2sbf",
                'created_by' => null,
                'updated_by' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
