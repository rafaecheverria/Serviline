<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Mail\ContactoMail;
use App\Http\Requests\ContactoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mapper;
use App\Http\Controllers\ApiController;

class ContactoController extends ApiController
{
    public function index()
    {
        Mapper::map(-36.42767421171982, -71.95656244999998, ['zoom' => 15, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);
        return view('contacto');
    }

    public function store(ContactoRequest $request)
    {
        if($request->ajax()){
            Contacto::create($request->all());
            Mail::to('contacto@serviline.cl')->send(new ContactoMail($request));
        }
    }
}
