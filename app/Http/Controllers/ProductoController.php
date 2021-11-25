<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.productos.registrar_producto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos=Producto::paginate(8);
        return view('auth.productos.mostrar_productos', compact('productos'));
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
        if (Hash::check($request->pass, $contrasena)) {
        $validation= Validator::make($request->all(), 
        [
            'foto' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg', 'max:1024'],
            'codigoBarras' => ['required', 'string', 'max:13', 'unique:productos'],
        ]
        );
        if ($validation->fails()) {
           // dd($validation);
            return redirect()->route('productos.index')
                        ->withErrors($validation)
                        ->withInput();
        }
        $imagen=$request->foto;
        $nombre= $request->codigoBarras.'.'.$imagen->getClientOriginalExtension();
        $destina=public_path('img/productos');
        $request->foto->move($destina, $nombre);
        $producto= new Producto();
        $producto->nombre=$request->nombre;
        $producto->codigoBarras=$request->codigoBarras;
        $producto->precio=$request->precio;
        $producto->foto=$nombre;
        $producto->save();
        return redirect()->route('productos.create')->withSuccess('Producto agregado');

    
    }//aqui cierra el if principal
    else {
         return redirect()->route('productos.index')->withWarning('Contraseña invalida');
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
        $producto=Producto::findOrFail($id);
        return view('auth.productos.editar_productos', compact('producto'));
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
    public function eliminar (Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $producto=Producto::find($request->id);
            $producto->delete();
            return redirect()->route('productos.create')->withSuccess('Producto devuelto');
        }else{
            return redirect()->route('productos.create')->withWarning('Contraseña invalida');
        }
        
    }
    public function actualizarPrecios(Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $producto=Producto::find($request->id);
            $producto->precio=$request->precio;
            $producto->save();
            return redirect()->route('productos.create')->withSuccess('Cambios realizados');
        }else{
            return redirect()->route('productos.create')->withWarning('Contraseña invalida');
        }
        
    }
    public function actualizarCodigo(Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $validation= Validator::make($request->all(), 
            [
                'codigoBarras' => ['required', 'string', 'max:13', 'unique:productos'],
            ]
            );
            if ($validation->fails()) {
               // dd($validation);
                return redirect()->route('productos.edit', $request->id)
                            ->withErrors($validation)
                            ->withInput();
            }
            $producto=Producto::find($request->id);
            $producto->codigoBarras=$request->codigoBarras;
            $producto->save();
            return redirect()->route('productos.create')->withSuccess('Cambios realizados');
        }else{
            return redirect()->route('productos.create')->withWarning('Contraseña invalida');
        }
    }
}
