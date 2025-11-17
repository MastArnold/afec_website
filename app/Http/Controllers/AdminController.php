<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Home;

class AdminController extends Controller
{
    
    public function __contruct(){

    }

    public function index(){
        return view('admin.index');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function home(){
        $title = "Page Accueil";
        $subtitle = "Administrer les informations de la page d'accueil";

        $home = Home::first();

        return view('admin.home', [
            'title' => $title,
            'subtitle' => $subtitle,
            'home' => $home
        ]);
    }

}
