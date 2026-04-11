<?php

namespace Database\Seeders;

use App\Models\DonationMethod;
use App\Models\DonationIbanDetail;
use App\Models\DonationMethodStep;
use Illuminate\Database\Seeder;

class DonationMethodSeeder extends Seeder
{
    public function run(): void
    {
        // ── 1. Virement bancaire ──────────────────────────────────────────────
        $virement = DonationMethod::create([
            'name'       => 'Virement bancaire',
            'tagline'    => 'Effectuez un virement depuis votre banque',
            'initials'   => 'VB',
            'color'      => 'emerald',
            'field'      => 'IBAN',
            'value'      => 'BF51 2614 8010 0200 2542 2241 0509',
            'copy_value' => 'BF51261480100200254222410509',
            'note'       => 'Merci d\'indiquer "AFEC-DON" en référence de votre virement.',
            'is_active'  => true,
        ]);

        DonationIbanDetail::insert([
            ['donation_method_id' => $virement->id, 'label' => 'Nom du compte', 'detail' => 'AFEC-PROJETS  ', 'created_at' => now(), 'updated_at' => now()],
            ['donation_method_id' => $virement->id, 'label' => 'Banque', 'detail' => 'Bank Of Africa', 'created_at' => now(), 'updated_at' => now()],
            ['donation_method_id' => $virement->id, 'label' => 'IBAN', 'detail' => 'BF51 2614 8010 0200 2542 2241 0509', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DonationMethodStep::insert([
            ['donation_method_id' => $virement->id, 'content' => 'Connectez-vous à votre espace bancaire en ligne ou rendez-vous en agence.'],
            ['donation_method_id' => $virement->id, 'content' => 'Créez un nouveau virement vers le compte AFEC en utilisant l\'IBAN ci-dessus.'],
            ['donation_method_id' => $virement->id, 'content' => 'Indiquez "Don AFEC" dans le champ référence ou motif du virement.'],
            ['donation_method_id' => $virement->id, 'content' => 'Validez le virement. Vous recevrez une confirmation par email sous 48h.'],
        ]);

        // ── 2. Orange Money ───────────────────────────────────────────────────
        $orange = DonationMethod::create([
            'name'       => 'Orange Money',
            'tagline'    => 'Orange Burkina',
            'initials'   => 'OM',
            'color'      => 'orange',
            'field'      => 'Numéro Orange Money',
            'value'      => '(226) 05 05 25 45 ',
            'copy_value' => '+22605052545 ',
            'note'       => 'Disponible 24h/24 depuis votre téléphone.',
            'is_active'  => true,
        ]);

        DonationMethodStep::insert([
            ['donation_method_id' => $orange->id, 'content' => 'Composez le #144# (Burkina Faso) sur votre téléphone.'],
            ['donation_method_id' => $orange->id, 'content' => 'Sélectionnez "Transfert d\'argent" puis "Envoyer de l\'argent".'],
            ['donation_method_id' => $orange->id, 'content' => 'Saisissez le numéro AFEC indiqué ci-dessus.'],
            ['donation_method_id' => $orange->id, 'content' => 'Entrez le montant de votre don et confirmez avec votre code PIN.'],
            ['donation_method_id' => $orange->id, 'content' => 'Revenez sur notre site pour nous dire ce que vous aimeriez que l\'on fasse de votre don !'],
        ]);

        // ── 3. Moov Money ─────────────────────────────────────────────────────
        $moov = DonationMethod::create([
            'name'       => 'Moov Money',
            'tagline'    => 'Envoyez votre don via Moov Money',
            'initials'   => 'MM',
            'color'      => 'sky',
            'field'      => 'Numéro Moov Money',
            'value'      => '(226) 52 57 92 34 ',
            'copy_value' => '+22652579234 ',
            'note'       => 'Disponible 24h/24 depuis votre téléphone Moov.',
            'is_active'  => true,
        ]);

        DonationMethodStep::insert([
            ['donation_method_id' => $moov->id, 'content' => 'Composez le *555# (Burkina Faso) sur votre téléphone.'],
            ['donation_method_id' => $moov->id, 'content' => 'Sélectionnez "Transfert" puis "Envoyer de l\'argent".'],
            ['donation_method_id' => $moov->id, 'content' => 'Saisissez le numéro AFEC indiqué ci-dessus.'],
            ['donation_method_id' => $moov->id, 'content' => 'Entrez le montant de votre don et confirmez avec votre code secret.'],
            ['donation_method_id' => $moov->id, 'content' => 'Revenez sur notre site pour nous dire ce que vous aimeriez que l\'on fasse de votre don !'],
        ]);
    }
}
