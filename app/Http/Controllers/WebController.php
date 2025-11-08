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
        return view('web.index', [
            'title' => 'AFEC',
            'meta' => $this->meta
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
        return view('web.contact', [
            'title' => 'AFEC - Contact',
            'meta' => $this->meta
        ]);
    }
}

