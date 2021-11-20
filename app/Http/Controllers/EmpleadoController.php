<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Empleado;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.registrar_empleado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados= Empleado::paginate(7);
       return view('empleados.mostrar_empleado', compact('empleados'));
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
               
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
               
            
        
        $validation= Validator::make($request->all(), 
        [
            'foto' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg', 'max:1024'],
            'nombre' => ['required', 'string', 'max:255'],
            'curp' => ['required','min:18','unique:empleados' ,'max:18', 'regex: /^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'rfc' => ['required', 'min:13','unique:empleados'  ,'max:13', 'regex: /^([A-ZÑ]|\&){4}[0-9]{2}(0[1-9]|1[0-2])([12][0-9]|0[1-9]|3[01])[A-Z0-9]{3}$/'],
            'salariobruto' => ['required'],
            'salarioneto' => ['required'],
            'fechaEntrada' => ['required'],
            'horaEntrada' => ['required'],
            'horaSalida' => ['required'],
        ]
        );
        if ($validation->fails()) {
           // dd($validation);
            return redirect()->route('empleaods.index')
                        ->withErrors($validation)
                        ->withInput();
        }
     
      if ($request->salariobruto > $request->salarioneto){
            $hora1 = strtotime( $request->horaEntrada ); 
            $hora2 = strtotime( $request->horaSalida );
        if($hora1<$hora2)
        {
            $user=new User();
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->name=$request->nombre;
            $user->save();
            $idUsuario= $user->id;
            $empleado= new Empleado();
            $imagen=$request->foto;
            $nombre= $request->curp.'.'.$imagen->getClientOriginalExtension();
            $destina=public_path('img/empleados');
            $request->foto->move($destina, $nombre);

            $empleado->nombre=$request->nombre;
            $empleado->curp=$request->curp;
            $empleado->rfc=$request->rfc;
            $empleado->salamb=$request->salariobruto;
            $empleado->salariomn=$request->salarioneto;
            $empleado->fecha_de_entrada=$request->fechaEntrada;
            $empleado->hora_entrada=$request->horaEntrada;
            $empleado->hora_salida=$request->horaSalida;
            $empleado->foto=$nombre;
            $empleado->user_id=$idUsuario;
            $empleado->save();

            return redirect()->route('empleaods.create')->withSuccess('Empleado agregado');
        }else{
            return redirect()->route('empleaods.index')->withWarning('Datos incoherentes');
        }
          
      }else{
        return redirect()->route('empleaods.index')->withWarning('Datos incoherentes');
      }

    }else{
        return redirect()->route('empleaods.index')->withWarning('Contraseña invalida');
    }
    }//aqui cierra el if principal
    else {
         return redirect()->route('empleaods.index')->withWarning('Contraseña invalida');
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
       $empleado = Empleado::findOrFail($id);
       return view('empleados.editar_empleados', compact('empleado'));
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
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){

            $empleado=Empleado::findOrFail($id);
            $user=User::findOrFail($empleado->user_id);
            if($user->email == $request->email)
            {
                if( $request->salariobruto != null){
                    $empleado->salariobruto=$request->salariobruto;
                }
                if( $request->salarioneto != null){
                    $empleado->salarioneto=$request->salarioneto;
                }
                if( $request->fechaEntrada != null){
                    $empleado->fechaEntrada=$request->fechaEntrada;
                }
                if( $request->horaEntrada != null){
                    $empleado->horaEntrada=$request->horaEntrada;
                }
                if( $request->horaSalida != null){
                    $empleado->horaSalida=$request->horaSalida;
                }
                $empleado->save();
                return redirect()->route('empleaods.create')->withSuccess('Informacion actualizada');
            }else{
                $validation= Validator::make($request->all(), 
        [
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
        ]
        );
        if ($validation->fails()) {
           // dd($validation);
            return redirect()->route('empleaods.edit', $id)
                        ->withErrors($validation)
                        ->withInput();
        }
        if( $request->salariobruto != null){
            $empleado->salariobruto=$request->salariobruto;
        }
        if( $request->salarioneto != null){
            $empleado->salarioneto=$request->salarioneto;
        }
        if( $request->fechaEntrada != null){
            $empleado->fechaEntrada=$request->fechaEntrada;
        }
        if( $request->horaEntrada != null){
            $empleado->horaEntrada=$request->horaEntrada;
        }
        if( $request->horaSalida != null){
            $empleado->horaSalida=$request->horaSalida;
        }
        $user->email=$request->email;
        $empleado->save();
        $user->save();


        return redirect()->route('empleaods.create')->withSuccess('Informacion actualizada');
               
            }






           
            //return redirect()->route('empleaods.create')->withSuccess('Informacion actualizada');
        }else{
            return redirect()->route('empleaods.create')->withWarning('Contraseña invalida');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=Empleado::find($id);
        $empleado->delete();
        $empleado->user->delete();
        return redirect()->route('empleaods.create')->withSuccess('Empleado eliminado');
    }
    public function eliminar (Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $empleado=Empleado::find($request->id);
            $empleado->delete();
            $empleado->user->delete();
            return redirect()->route('empleaods.create')->withSuccess('Empleado eliminado');
        }else{
            return redirect()->route('empleaods.create')->withWarning('Contraseña invalida');
        }
        
    }

    public function ChangePass(Request $request){
        $contrasena=auth()->user()->password;
        if (Hash::check($request->pass, $contrasena)){
            $empleado = Empleado::findOrFail($request->id);
            $user=User::findOrFail($empleado->user_id);
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect()->route('empleaods.create')->withSuccess('Informacion actualizada');
        }else{
            return redirect()->route('empleaods.create')->withWarning('Contraseña invalida');
        }

    }
}
