<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contacto');
    }

    public function greeting($nombre) {

        $consolas = [
            'Xbox',
            'PlayStation',
            'Wii U',
            'Ste Ijue Pta'
        ];
        return view('saludos', compact('nombre', 'consolas'));
    }

    public function mensajes(CreateMessageRequest $request)
    {
        $data = $request->all();

        return back()->with('info', 'Your message was send successfully');
    }
}

