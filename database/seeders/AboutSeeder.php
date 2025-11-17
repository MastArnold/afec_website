<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use App\Models\AboutGoals;
use App\Models\AboutValues;
use App\Models\Partner;
use App\Models\Team;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'introduction' => '',
            'cover_1' => 'storage/about/col-1-row-1.jpg',
            'cover_2' => 'storage/about/col-1-row-2.jpg',
            'cover_3' => 'storage/about/col-2-row-1.jpg',
            'cover_4' => 'storage/about/col-2-row-2.jpg',
            'mission' => '',
            'transition_image' => 'storage/about/transition.jpg',
        ]);

        #

        AboutGoals::create([
            'name' => 'Projets',
            'value' => '+ 600'
        ]);

        AboutGoals::create([
            'name' => 'Interventions',
            'value' => '+ 2000',
        ]);

        AboutGoals::create([
            'name' => 'Donations',
            'value' => '+ 44 million',
        ]);

        #

        AboutValues::create([
           'icon' => 'cross',
           'name' => 'Foi',
           'quote' => 'Nous croyons en la solidarité et en la fraternité.',
           'is_public' => true,
        ]);

        AboutValues::create([
           'icon' => 'handshake',
           'name' => 'Fraternité',
           'quote' => 'Nous croyons en la solidarité et en la fraternité.',
           'is_public' => true,
        ]);

        AboutValues::create([
           'icon' => 'service',
           'name' => 'Services',
           'quote' => 'Nous croyons en la solidarité et en la fraternité.',
           'is_public' => true,
        ]);

        AboutValues::create([
           'icon' => 'star',
           'name' => 'Intégrité',
           'quote' => 'Nous croyons en la solidarité et en la fraternité.',
           'is_public' => true,
        ]);

        AboutValues::create([
           'icon' => 'justice',
           'name' => 'Justice',
           'quote' => 'Nous croyons en la solidarité et en la fraternité.',
           'is_public' => true,
        ]);

        #

        Partner::create([
            'logo' => 'https://mastercard.com/content/dam/mccom/shared/header/ma_symbol.svg',
            'name' => 'Mastercard',
            'url' => 'https://www.mastercard.com',
            'is_public' => true,
        ]);

        $partners = [
            ['name' => 'Visa', 'logo' => 'storage/partners/visa.png', 'url' => 'https://www.visa.com'],
            ['name' => 'American Express', 'logo' => 'storage/partners/amex.png', 'url' => 'https://www.americanexpress.com'],
            ['name' => 'PayPal', 'logo' => 'storage/partners/paypal.png', 'url' => 'https://www.paypal.com'],
            ['name' => 'Stripe', 'logo' => 'storage/partners/stripe.png', 'url' => 'https://stripe.com'],
            ['name' => 'Amazon', 'logo' => 'storage/partners/amazon.png', 'url' => 'https://www.amazon.com'],
            ['name' => 'Google', 'logo' => 'storage/partners/google.png', 'url' => 'https://www.google.com'],
            ['name' => 'Apple', 'logo' => 'storage/partners/apple.png', 'url' => 'https://www.apple.com'],
            ['name' => 'Microsoft', 'logo' => 'storage/partners/microsoft.png', 'url' => 'https://www.microsoft.com'],
            ['name' => 'Netflix', 'logo' => 'storage/partners/netflix.png', 'url' => 'https://www.netflix.com'],
            ['name' => 'Coca-Cola', 'logo' => 'storage/partners/cocacola.png', 'url' => 'https://www.coca-cola.com'],
        ];

        foreach ($partners as $partner) {
            Partner::create([
                'logo' => $partner['logo'],
                'name' => $partner['name'],
                'url' => $partner['url'],
                'is_public' => true,
            ]);
        }

        #

        Team::create([
            'name' => 'John Doe',
            'role' => 'CEO',
            'photo' => 'https://plus.unsplash.com/premium_photo-1762591318545-462f9c69051e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDV8dG93SlpGc2twR2d8fGVufDB8fHx8fA%3D%3D',
            'is_public' => true,
        ]);

        $teamMembers = [
            [
                'name' => 'Jane Smith',
                'role' => 'Project Manager',
                'photo' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=600&auto=format&fit=crop&q=60',
            ],
            [
                'name' => 'Michael Brown',
                'role' => 'Developer',
                'photo' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?w=600&auto=format&fit=crop&q=60',
            ],
            [
                'name' => 'Emily Johnson',
                'role' => 'Designer',
                'photo' => 'https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?w=600&auto=format&fit=crop&q=60',
            ],
            [
                'name' => 'David Wilson',
                'role' => 'Marketing Lead',
                'photo' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=600&auto=format&fit=crop&q=60',
            ],
            [
                'name' => 'Sophia Martinez',
                'role' => 'Community Manager',
                'photo' => 'https://images.unsplash.com/photo-1525130413817-d45c1d127c42?w=600&auto=format&fit=crop&q=60',
            ],
        ];

        foreach ($teamMembers as $member) {
            Team::create([
                'name' => $member['name'],
                'role' => $member['role'],
                'photo' => $member['photo'],
                'is_public' => true,
            ]);
        }

    }
}
