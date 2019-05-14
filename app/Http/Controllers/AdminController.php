<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Credito;
use App\Cuota;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
		    'password' => 'required|min:6|confirmed|string'
		]);

		$datos = $request->except('password_confirmation');
		$datos['password'] = Hash::make($request->password);

    	User::create($datos);

    	return redirect()->route('admin.usuarios')->with('status' , 'Usuario creado correctamente');
    }

    public function modificarUsuario($id)
    {
        $user = User::findOrFail($id);

        return view('dash.editarusuario' , compact('user'));
    }

    public function actualizarUsuario(Request $request , $id)
    {
        $request->validate([
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'max:255',
            'tipo_documento' => 'required',
            'numero_documento' => 'required|string|max:255'
        ]);

        if($request->password == '' || $request->password == null)
        {
            $datos = $request->except('password');
        }else{
            $datos = $request->all();
            $datos['password'] = Hash::make($request->password);
        }
        

        $user = User::findOrFail($id)->update($datos);

        return redirect()->route('admin.usuarios')->with('status' , 'Usuario actualizado correctamente');
    }

    public function creditos()
    {
        $refCreditos = new Credito();
        $creditos = $refCreditos->creditos();

        return view('dash.creditos' , compact('creditos'));
    }

    public function crearCredito()
    {
        $userRef = new User();
        $users = $userRef->usuarios();

        return view('dash.crearcredito' , compact('users'));
    }

    public function crearNuevoCredito(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'interes' => 'required',
            'cuotas' => 'required',
            'monto' => 'required',
        ]);

        $cuotas = json_decode($request->cuotas_array);

        $datos = $request->except('cuotas_array');
        $datos['admin_id'] = Auth::user()->id;

        $credito = Credito::create($datos);

        foreach ($cuotas as $cuota) {
            $data = [
                'credito_id' => $credito->id, 
                'interes' => $cuota[1],
                'abono' => $cuota[2],
                'monto' => $cuota[3],
                'saldo' => $cuota[4]
            ];
            $cuota = Cuota::create($data);
        }

        return redirect()->route('admin.creditos')->with('status','Crédito Creado Exitosamente');
    }

    public function verCredito($id)
    {
        $credito = Credito::findOrFail($id);

        return view('dash.credito' , compact('credito'));
    }

    public function enviarMensaje()
    {
        $userRef = new User();
        $users = $userRef->usuarios();

        return view('dash.enviarmensaje' , compact('users'));
    }
}
