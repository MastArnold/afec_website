<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserRoleSeeder::class);
        $this->call(ContactMessageSubjectSeeder::class);
        $this->call(ContactAddressSeeder::class);
        $this->call(ContactSocialSeeder::class);
        $this->call(ArticleCategorySeeder::class);
        $this->call(DonationMethodSeeder::class);

        User::create([
            'name'     => 'Administrateur',
            'email'    => 'admin@afec.bf',
            'password' => Hash::make('12345'),
            'role_id'  => 1, // superadmin
        ]);
    }
}
