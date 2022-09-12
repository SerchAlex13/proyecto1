<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function landingpage()
    {
        return view('paginas.landingpage');
    }

    public function contacto($codigo = null)
    {    
        

        if (!empty($codigo) && $codigo == '1234')
        {
            $nombre_default = 'Invitado';
            $correo_default = 'info@example.com';
        }
        else
        {
            $nombre_default = null;
            $correo_default = null;
        }
        
    return view('paginas.contacto', compact('nombre_default', 'correo_default'));
    }

    public function recibirFormContacto(Request $request)
    {
        //Recibir información
        //dd($request->nombre);
        //Validar
        $request->validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => ['required', 'email'],
            'comentario' => 'required',
        ]);

        echo "Funcioné";

        //Insertar a DB
        //Redirigir
    }
}
