<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMaillable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'ciudad'=>'required',
            'direccion'=>'required',
            'provincia'=>'required',
        ]);
    $correo = new ContactoMaillable($request->all());
    Mail::to('echumacero@ucvirtual.edu.pe')->send($correo);
    return redirect()->route('welcome');

    }

}
