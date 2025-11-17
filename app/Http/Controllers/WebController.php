<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\AboutGoalsRepositoryInterface;
use App\Repositories\Contracts\AboutRepositoryInterface;
use App\Repositories\Contracts\AboutValuesRepositoryInterface;
use App\Repositories\Contracts\TeamRepositoryInterface;
use App\Repositories\Contracts\PartnerRepositoryInterface;
use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    private AboutRepositoryInterface $aboutRepo;
    private AboutGoalsRepositoryInterface $aboutGoalsRepo;
    private AboutValuesRepositoryInterface $aboutValuesRepo;
    private TeamRepositoryInterface $teamRepo;
    private PartnerRepositoryInterface $partnerRepo;
    private BlogRepositoryInterface $blogRepo;
    // Meta
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

    public function __construct(
        AboutRepositoryInterface $aboutRepo,
        AboutGoalsRepositoryInterface $aboutGoalsRepo,
        AboutValuesRepositoryInterface $aboutValuesRepo,
        TeamRepositoryInterface $teamRepo,
        PartnerRepositoryInterface $partnerRepo,
        BlogRepositoryInterface $blogRepo
    )
    {
        $this->aboutRepo = $aboutRepo;
        $this->aboutGoalsRepo = $aboutGoalsRepo;
        $this->aboutValuesRepo = $aboutValuesRepo;
        $this->teamRepo = $teamRepo;
        $this->partnerRepo = $partnerRepo;
        $this->blogRepo = $blogRepo;
    }

    public function index(){
        $this->meta['title'] = 'AFEC';

        $header = [
            'introduction' => 'Chaque geste compte, chaque vie mérite d’être changée',
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
        $about = $this->aboutRepo->all() ? $this->aboutRepo->all()->first() : null;

        if($about == null)
            return redirect()->route('web.contact');

        $introduction = [
            "
                L'ONG « Association Frères des Écoles Chrétiennes (AFEC) » est une organisation à but 
                non lucratif créée en 1981 et légalement reconnue par l'Etat Burkinabè. Elle intervient 
                dans les domaines de l’éducation de qualité à travers un réseau d’écoles primaires et secondaires ; 
                de l’enseignement supérieur ; de la formation technique et professionnelle ; du développement rural ; 
                de la protection des enfants et de l’action humanitaire au Burkina Faso.
            ",
            "
                L'AFEC est le principal instrument de collecte de fonds des Frères des Écoles Chrétiennes 
                au Burkina Faso pour soutenir l'éducation des enfants et la formation des jeunes, surtout 
                les plus vulnérables. Et le Bureau de Développement et de Solidarité qui est l’organe exécutif 
                de l’AFEC, a la charge de la planification des projets, de la mobilisation des ressources, de 
                l’exécution et du rapportage des projets. Ce bureau coordonne de ce fait toutes les activités 
                entrant dans le cadre des différents projets de l’AFEC. Le Bureau de Développement et de Solidarité 
                de l’AFEC, mis en place en 2019, mène des actions de solidarité en faveur des plus démunis au 
                Burkina Faso.
            "
        ];
        $cover1 = $about->cover_1;
        $cover2 = $about->cover_2;
        $cover3 = $about->cover_3;
        $cover4 = $about->cover_4;
        $mission = [
            "
            -	Contribuer au développement durable par l'éducation des enfants et la formation des jeunes vulnérables
            ",
            "
            -	Promouvoir des activités parascolaires, écocitoyennes et l'action humanitaire
            ",
            "
            -	Assurer au réseau « La Salle » du Burkina les infrastructures scolaires, les équipements, le renforcement des capacités, les bourses d'études pour une éducation de qualité.
            "
        ];
        $goals = $this->aboutGoalsRepo->all();
        $transition = $about->transition_image;
        $value_sub_title = "Sous Titre";
        $values = $this->aboutValuesRepo->all();
        #
        $partner_text = "Nos Partenaires nous font confiance";
        $partners = $this->partnerRepo->all();
        #
        $team_text = "Sous Titre";
        $teams = $this->teamRepo->all();
        #
        $blog_text = "Sous Titre";
        $blogs = $this->blogRepo->all();

        $abt = [
            'introduction' => $introduction,
            'cover1' => $cover1,
            'cover2' => $cover2,
            'cover3' => $cover3,
            'cover4' => $cover4,
            'mission' => $mission,
            'goals' => $goals,
            'transition' => $transition,
            'value_sub_title' => $value_sub_title,
            'values' => $values,
            'partner_text' => $partner_text,
            'partners' => $partners,
            'team_text' => $team_text,
            'teams' => $teams,
            'blog_text' => $blog_text,
            'blogs' => $blogs
        ];

        return view('web.about', [
            'title' => 'AFEC - A Propos de nous',
            'meta' => $this->meta,
            'about' => $abt
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

    public function default(){
        return view('admin.default', [
            'title' => 'AFEC',
            'meta' => $this->meta
        ]);
    }
}

