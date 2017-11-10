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
                    <h3 class="panel-title">Panel Tareas</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Tarea</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Tarea'): ?>
                            <tr>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                              </td>
                              <td class="hidden-xs">{{$Asignacions->tipo}}</td>
                              <td>{{$Asignacions->nombre}}</td>
                              <td>{{$Asignacions->descripcion}}</td>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-eye"></em></a>
                              </td>
                            </tr>

                        <?php endif ?>

                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>

</div></div></div>



<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Proyectos</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Proyecto</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Proyecto'): ?>
                            <tr>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                              </td>
                              <td class="hidden-xs">{{$Asignacions->tipo}}</td>
                              <td>{{$Asignacions->nombre}}</td>
                              <td>{{$Asignacions->descripcion}}</td>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-eye"></em></a>
                              </td>
                            </tr>

                        <?php endif ?>

                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>

</div></div></div>

<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Asignaciones</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Asignacion</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Asignacion'): ?>
                            <tr>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                              </td>
                              <td class="hidden-xs">{{$Asignacions->tipo}}</td>
                              <td>{{$Asignacions->nombre}}</td>
                              <td>{{$Asignacions->descripcion}}</td>
                              <td align="center">
                                <a class="btn btn-default"><em class="fa fa-eye"></em></a>
                              </td>
                            </tr>

                        <?php endif ?>

                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>

</div></div></div>


@endsection