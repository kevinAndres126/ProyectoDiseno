<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Asignacion = Asignacion::orderBy('id','ASC')->paginate(100);

        #for ($i=0; $i < count($Asignacion) ; $i++) { 

           # if ($Asignacion[$i]['tipo'] == 'Tarea') {

          #      return view('Tarea.TableTarea')->with('Asignacion',$Asignacion);        
         #   }
        #    return view('Asignacion.AsignacionMain')->with('Asignacion',$Asignacion);
       # }

        return view('Asignacion.AsignacionMain')->with('Asignacion',$Asignacion);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Asignacion.CrearAsignacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Asignacion = new Asignacion($request->all());
        $Asignacion -> save();
        
        return redirect()->route('Asignacion.index');
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
        $Asignacion =Asignacion::find($id);
        return view('Asignacion.VerAsignacion')->with('Asignacion',$Asignacion);
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
        $Asignacion =Asignacion::find($id);
        return view('Asignacion.EditarAsignacion')->with('Asignacion',$Asignacion);
        
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
        $Asignacion = Asignacion::find($id);
        $Asignacion ->nombre = $request->nombre;
        $Asignacion ->descripcion = $request->descripcion;
        $Asignacion ->tipo = $request->tipo;
        $Asignacion ->fechaCreacion = $request->fechaCreacion;
        $Asignacion ->fechaEntrega  = $request->fechaEntrega;
        $Asignacion ->valor = $request->valor;
        $Asignacion ->calificacion = $request->calificacion;
        $Asignacion ->id_grupo = $request->id_grupo;
        $Asignacion ->save();

        return redirect()->route('Asignacion.index');
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

        $Asignacion = Asignacion::find($id);
        $Asignacion ->delete();
        return redirect()->route('Asignacion.index');
    }
}
