<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private $meta = [
        'description' => '',
        'keywords' => '',
        'title' => '',
        'image' => '',
        'url' => '',
        'type' => '',
        'site_name' => '',
        'locale' => '',
        'locale_alternate' => ''
    ];

    public function __construct()
    {
        
    }

    public function index(){
        $this->meta['title'] = 'AFEC';

        $header = [
            'introduction' => 'Nous servons partout mgl',
            'image' => 'storage/header-1.jpeg',
        ];

        $about = [
            'theme' => 'storage/theme/2025.png',
            'theme_year' => '2025',
            'us' =>"
                L'ONG <strong>Association Frères des Écoles Chrétiennes (AFEC)</strong> est une organisation à but non lucratif légalement reconnue par l'Etat Burkinabè. Elle intervient dans les domaines de l’éducation de qualité à travers un réseau d’écoles primaires et secondaires<br>
                <strong>de l’enseignement supérieur </strong> <br>
                <strong>de la formation technique et professionnelle </strong><br>
                <strong>du développement rural </strong><br>
                <strong>de la protection des enfants </strong><br>
                <strong>et de l’action humanitaire. </strong><br><br>

                L'AFEC est le principal instrument de collecte de fonds des Frères des Écoles Chrétiennes au Burkina Faso pour soutenir l'éducation des enfants et la formation des jeunes, surtout les plus vulnérables. 
            "
        ];

        $home = [
            'header' => $header,
            'about' => $about
        ];

        return view('web.index', [
            'title' => 'AFEC',
            'meta' => $this->meta,
            'home' => $home
        ]);
    }

    public function about(){
        return view('web.about', [
            'title' => 'AFEC - A Propos de nous',
            'meta' => $this->meta
        ]);
    }

    public function blog(){
        return view('web.blog', [
            'title' => 'AFEC - Actualités',
            'meta' => $this->meta
        ]);
    }

    public function blogView(int $id){
        return view('web.blog-view', [
            'title' => 'AFEC - Actualités ' . $id,
            'meta' => $this->meta
        ]);
    }

    public function images(){
        return view('web.image', [
            'title' => 'AFEC - Gallerie Image',
            'meta' => $this->meta
        ]);
    }

    public function videos(){
        return view('web.video', [
            'title' => 'AFEC - Gallerie Video',
            'meta' => $this->meta
        ]);
    }

    public function domains(){
        return view('web.domain', [
            'title' => 'AFEC - Domaines',
            'meta' => $this->meta
        ]);
    }

    public function donation(){
        return view('web.donation', [
            'title' => 'AFEC - Agir avec nous',
            'meta' => $this->meta
        ]);
    }

    public function contact(){
        $sieges = [
            [
                'color' => 'blue',
                'name' => 'Siege de Bobo-Dioulasso',
                'email'=> 'sec_dilao@lasalle.org',
                'phone'=> '(226) 20 97 75 39 / 02 84 40 00',
                'address'=> 'Bobo-Dioulasso, secteur 12, Niéneta | 01BP461 Bobo-Dioulasso 01',
                'map' => '#'
            ],
            [
                'color' => 'orange',
                'name' => 'Bureau de Ouagadougou',
                'email'=> 'contact@afec.bf',
                'phone'=> '(226) 52 57 92 34',
                'address'=> 'Ouagadougou, Avenue de la cathédrale',
                'map' => '#'
            ],
        ];
        $socials = [
            [
                'name' => 'facebook',
                'url' => 'https://www.facebook.com/afec_bf/'
            ],
            [
                'name' => 'linkedin',
                'url' => 'https://www.linkedin.com/in/afec-ong-0697b5281/overlay/about-this-profile/?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base%3BIqMPKdbVQVG9UnO9fX7MHA%3D%3D'
            ],
        ];

        $contact = [
            'sieges' => $sieges,
            'socials' => $socials
        ];

        return view('web.contact', [
            'title' => 'AFEC - Contact',
            'meta' => $this->meta,
            'contact' => $contact
        ]);
    }
}

