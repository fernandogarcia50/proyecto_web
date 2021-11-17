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
        //
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
            'foto' => ['required', 'image', 'mimes:jpeg,bmp,png,jpg', 'max:1024'],
            'nombre' => ['required', 'string', 'max:255'],
            'curp' => ['required','min:18', 'max:18'],
            'email' => ['required', 'string', 'email', 'max:255', ],
            'password' => ['required', 'string', 'min:8'],
            'rfc' => ['required', 'min:13', 'max:13'],
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
      echo "estoy llegando";
      if ($request->salariobruto > $request->salarioneto){
            $hora1 = strtotime( $request->horaEntrada ); 
            $hora2 = strtotime( $request->horaSalida );
        if($hora1<$hora2)
        {
            $user=new User();
            $user->email="fg7893210@gmail.com";
            $user->password=Hash::make($request->password);
            $user->name=$request->nombre;
            $user->save();
            $idUsuario= $user->id;
            $empleado= new Empleado();
            $imagen=$request->foto;
            $nombre= $request->nombre.'.'.$imagen->getClientOriginalExtension();
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
        }
          
      }else{
          echo "no soy mayor";
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
}
