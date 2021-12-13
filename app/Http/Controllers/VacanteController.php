<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Vacante;
use App\Producto;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vacantes.registrar_vacantes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacantes=Vacante::paginate(8);
        return view('vacantes.mostrar_vacantes', compact('vacantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
           $vacante=new Vacante();
           $vacante->titulo=$request->titulo;
           $vacante->puesto=$request->puesto;
           $vacante->carreras=$request->carreras;
           $vacante->descripcion=$request->descripcion;
           if($request->salario != null){
            $vacante->salario=$request->salario;
           }else{
            $vacante->salario=0;
           }
           $vacante->status=true;
           $vacante->save();
            
            return redirect()->route('vacantes.create')->withSuccess('Vacante registrada');
        }else{
            return redirect()->route('vacantes.create')->withWarning('Contraseña invalida');
        }
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
        echo "estoy llegando";
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
    public function actualizarVacante(Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $vacante=Vacante::find($request->id);
            $vacante->status=false;
            $vacante->save();
            return redirect()->route('vacantes.create')->withSuccess('Vacante actualizada');
        }else{
            return redirect()->route('vacantes.create')->withWarning('Contraseña invalida');
        }
    }

    public function showVcntProd()
    {
        $productos=Producto::all();
        $vacantes=Vacante::all();
        //return view('vacantes.mostrar_vacantes', compact('vacantes'));
        return view('welcome', compact('vacantes','productos'));
    }
}
