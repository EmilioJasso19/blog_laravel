<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{


    public function __construct()
    {
        $this->middleware('example', ['only' => ['home']]);
    }

    public function home()
    {
        return view('home');
    }

    public function greeting($nombre = "Invitado") {

        $consolas = [
            'Xbox',
            'PlayStation',
            'Wii U',
            'Ste Ijue Pta'
        ];
        return view('saludos', compact('nombre', 'consolas'));
    }
}

