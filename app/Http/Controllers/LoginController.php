<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function mostrar()
    {
        return view('login');
    }

    public function ingresar(Request $request)
    {
        // Busca en emprendedores donde el email y telefono coincidan
        $emprendedor = DB::table('emprendedores')
            ->where('email', $request->email)
            ->where('telefono', $request->password)
            ->first();

        if ($emprendedor) {
            session(['usuario' => $emprendedor]);
            return redirect()->route('inicio');
        }

        return back()->withErrors(['email' => 'Correo o contraseña incorrectos.']);
    }

    public function salir()
    {
        session()->flush();
        return redirect()->route('login');
    }
}