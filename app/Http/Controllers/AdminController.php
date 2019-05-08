<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{

	public function dashboard()
	{
		return view('dash.dashboard');
	}

    public function usuarios()
    {
    	$userRef = new User();
    	$users = $userRef->usuarios();

    	return view('dash.usuarios' , compact('users'));
    }

    public function crearUsuario()
    {
    	return view('dash.crearusuario');
    }

    public function crearNuevoUsuario(Request $request)
    {
    	$request->validate([
		    'primer_nombre' => 'required|string|max:255',
		    'segundo_nombre' => 'max:255',
		    'primer_apellido' => 'required|string|max:255',
		    'segundo_apellido' => 'max:255',
		    'email' => 'required|unique:users|email',
		    'tipo_documento' => 'required',
		    'numero_documento' => 'required|string|max:255',
		    'password' => 'required|min:8|confirmed|string'
		]);

		$datos = $request->except('password_confirmation');
		$datos['password'] = Hash::make($request->password);

    	User::create($datos);

    	return redirect()->route('admin.usuarios')->with('status' , 'Usuario creado correctamente');
    }
}
