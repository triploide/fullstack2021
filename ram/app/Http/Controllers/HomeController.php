<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $services = [
        [
            'title' => 'Modern & Responsive design',
            'icon' => 'ti-desktop',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.'
        ],
        [
            'title' => 'Awarded licensed company',
            'icon' => 'ti-medall',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.'
        ],
        [
            'title' => 'Build your website Professionally',
            'icon' => 'ti-layers-alt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.'
        ]
    ];

    public function home()
    {
        return view('front.home.index', ['services' => $this->services]); // include 'resources/views/front/home/index.blade.php';
    }


}
