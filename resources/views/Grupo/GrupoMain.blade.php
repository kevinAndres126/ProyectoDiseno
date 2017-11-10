@extends('layouts.app')


@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Grupos</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Grupo.create')}}" class="btn btn-primary">
                    Crear Nuevo Grupo</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Grupo as $Grupos)
                          <tr>
                            <td align="center">
                              <a href="{{route('Grupo.edit',$Grupos->id)}}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a href="{{route('Grupo.destroy',$Grupos->id)}}" onclick="return confirm('¿Seguro que seas eliminar?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{$Grupos->id}}</td>
                            <td>{{$Grupos->nombre}}</td>
                            <td>{{$Grupos->descripcion}}</td>
                            <td align="center">
                              <a href="{{route('Grupo.show',$Grupos->id)}}" class="btn btn-default"><em class="fa fa-eye"></em></a>
                            </td>
                          </tr>
                    @endforeach
                    </tbody>
                </table>

              </div>

            </div>

</div></div></div>

@endsection