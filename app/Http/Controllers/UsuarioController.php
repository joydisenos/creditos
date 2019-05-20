<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Credito;
use App\Mensaje;

class UsuarioController extends Controller
{
    public function index()
    {
    	return view('dash.index');
    }

    public function creditos()
    {
    	$creditos = Auth::user()->creditos;

    	return view('dash.creditos' , compact('creditos'));
    }

    public function verCredito($id)
    {
        $credito = Credito::findOrFail($id);

        if($credito->user_id != Auth::user()->id)
        {

        	return redirect()->back();

        }else{

        	return view('dash.credito' , compact('credito'));

        }
    }

    public function mensajes()
    {
    	$mensajes = Auth::user()->mensajes;

    	return view('dash.mensajes' , compact('mensajes'));
    }

    public function verMensaje($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->leido = 1;
        $mensaje->save();

        return view('dash.vermensaje' , compact('mensaje'));
    }
}
