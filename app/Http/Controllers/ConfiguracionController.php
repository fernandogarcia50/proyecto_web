<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;




class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::find(Auth::user()->id);
        return view('cuenta.mostrar_perfil', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados=Empleado::paginate(8);
        return view('cuenta.cambiar_pass', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation= Validator::make($request->all(), 
        [
            'pass' => ['required', 'string', 'min:8'],
        ]
        );
        if ($validation->fails()) {
           // dd($validation);
             return redirect()->route('configuracion.create')->withWarning('Contraseña no válida');
        }
        $user=User::find($request->id);
        $user->password=Hash::make($request->pass);
        $user->save();
        return redirect()->route('configuracion.create')->withSuccess('Contraseña actualizada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cambiarContra(Request $request ){
        
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $validation= Validator::make($request->all(), 
        [
            'pass' => ['required', 'string', 'min:8'],
        ]
        );
        if ($validation->fails()) {
           // dd($validation);
             return redirect()->route('configuracion.index')->withWarning('Contraseña no válida');
        }
        $user=User::find($request->id);
        $user->password=Hash::make($request->password);
        $user->save();
            
            return redirect()->route('configuracion.index')->withSuccess('Contraseña actualizada');
        }else{
            return redirect()->route('configuracion.index')->withWarning('Contraseña invalida');
        }
    }
}
