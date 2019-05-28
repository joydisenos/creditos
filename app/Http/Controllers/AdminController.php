<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Credito;
use App\Cuota;
use App\Mensaje;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function dashboard()
	{
        $creditos = new Credito();

        $creditosPorMes = $creditos->creditosPorMes();
        $ingresosPorMes = $creditos->ingresosPorMes();
        $pagosPorMes = $creditos->pagosPorMes();
        $creditosAll = $creditos->creditos();

        $creditosMes = $creditos->creditosMes();
        $ingresosMes = round($creditos->ingresosMes());
        $pagosMes = round($creditos->pagosMes());
        
        $totalEstatusCreditos = $creditos->totalEstatusCreditos();
        $pagos = $creditos->porPagar();

        $cuotas = new Cuota();
        $estadisticaPagos = $cuotas->estadisticaPagos();
        $estadisticaPagosPendientes = $cuotas->estadisticaPagosPendientes();

		return view('dash.dashboard' , compact('creditosPorMes' , 'ingresosPorMes' , 'pagosPorMes' , 'creditosMes' , 'ingresosMes' , 'pagosMes', 'totalEstatusCreditos','estadisticaPagos' ,'estadisticaPagosPendientes' , 'pagos', 'creditosAll') );
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

		$datos = $request->except(['password_confirmation' , 'tipo_usuario']);
		$datos['password'] = Hash::make($request->password);
        $datos['registro_id'] = Auth::user()->id;

    	$user = User::create($datos);

        switch ($request->tipo_usuario) {

            case 1:
                $user->assignRole('almacen');
                break;

            case 2:
                $user->assignRole('agente');
                break;

            case 3:
                $user->assignRole('admin');
                break;
            
            default:
                # code...
                break;
        }

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

        if($request->has('limite_credito') && $request->limite_credito != null)
        {
            $datos['validado_id'] = Auth::user()->id;
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
        $users = $userRef->usuariosConCredito();

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

        $date = Carbon::now();

        foreach ($cuotas as $i => $cuota) {
            $data = [
                'credito_id' => $credito->id, 
                'fecha_pago' => $date->addMonth(),
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
        $productos = json_decode($credito->productos);

        return view('dash.credito' , compact('credito','productos'));
    }

    public function enviarMensaje()
    {
        $userRef = new User();
        $users = $userRef->usuarios();

        return view('dash.enviarmensaje' , compact('users'));
    }

    public function enviarNuevoMensaje(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);

        $data = $request->all();

        $mensaje = Mensaje::create($data);

        return redirect()->back()->with('status' , 'Mensaje enviado!');
    }

    public function pagos()
    {
        $refPagos = new Credito();
        $pagos = $refPagos->porPagar();

        return view('dash.porpagar' , compact('pagos'));
    }

    public function marcarPago($id)
    {
        $pago = Credito::findOrFail($id);
        $pago->productos_pagos = 1;
        $pago->save();

        return redirect()->back()->with('status' , 'Crédito #' . $pago->id . ' marcado como pago');
    }

    public function aprobarCredito($id)
    {
        $credito = Credito::findOrFail($id);
        $credito->estatus = 1;
        $credito->save();

        return redirect()->back()->with('status' , 'Crédito Aprobado');
    }

    public function negarCredito($id)
    {
        $credito = Credito::findOrFail($id);
        $credito->estatus = 2;
        $credito->save();

        return redirect()->back()->with('status' , 'Crédito Negado');
    }
}
