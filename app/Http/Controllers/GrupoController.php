<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Grupo = Grupo::Search($request->nombre)->orderBy('id','ASC')->paginate(100);
        return view('Grupo.GrupoMain')->with('Grupo',$Grupo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Grupo.Create');
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
        $Grupo = new Grupo($request->all());
        $Grupo -> save();
        
        return redirect()->route('Grupo.index');
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
        $Grupo =Grupo::find($id);
        return view('Grupo.Ver')->with('Grupo',$Grupo);
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
        $Grupo =Grupo::find($id);
        return view('Grupo.Editar')->with('Grupo',$Grupo);
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
        $Grupo = Grupo::find($id);
        $Grupo ->nombre = $request->nombre;
        $Grupo ->descripcion = $request->descripcion;
        $Grupo ->id_persona = $request->id_persona;
        $Grupo ->save();

        return redirect()->route('Grupo.index');
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
        $Grupo = Grupo::find($id);
        $Grupo ->delete();
        return redirect()->route('Grupo.index');
    }
}
