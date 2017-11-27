@extends('home')


@section('subcontent')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Tareas</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Tarea</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Tarea'): ?>
                            <tr>
                              <div class="col-lg-4" >
                                  <div class="panel-primary class" >
                                      <div class="panel-heading">
                                        
                                        <a href="{{route('Asignacion.show',$Asignacions->id)}}"  class="text-danger">{{$Asignacions->nombre}}</a>
                                      </div>
                                      <div class="panel-body">
                                          {{$Asignacions->descripcion}}
                                      </div>
                                      <div class="panel-footer">
                                          <a href="{{route('Asignacion.edit',$Asignacions->id)}}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                          <a href="{{route('Asignacion.destroy',$Asignacions->id)}}" onclick="return confirm('¿Seguro que seas eliminar?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                            </tr>
                        <?php endif ?>
                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>
</div></div>



<div class="container">
    <div class="row">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Proyectos</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Proyecto</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                    
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Proyecto'): ?>
                            <tr>
                              <div class="col-lg-4" >
                                  <div class="panel-primary class" >
                                      <div class="panel-heading">
                                        
                                        <a href="{{route('Asignacion.show',$Asignacions->id)}}"  class="text-danger">{{$Asignacions->nombre}}</a>
                                      </div>
                                      <div class="panel-body">
                                          {{$Asignacions->descripcion}}
                                      </div>
                                      <div class="panel-footer">
                                          <a href="{{route('Asignacion.edit',$Asignacions->id)}}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                          <a href="{{route('Asignacion.destroy',$Asignacions->id)}}" onclick="return confirm('¿Seguro que seas eliminar?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                            </tr>

                        <?php endif ?>

                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>
</div></div>

<div class="container">
    <div class="row">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Asignaciones</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{route('Asignacion.create')}}" class="btn btn-primary">
                    Crear Nueva Asignacion</a><br>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <tbody>
                    
                    @foreach($Asignacion as $Asignacions)
                      <?php if ($Asignacions['tipo'] == 'Asignacion'): ?>
                            <tr>
                              <div class="col-lg-4" >
                                  <div class="panel-primary class" >
                                      <div class="panel-heading">
                                        
                                        <a href="{{route('Asignacion.show',$Asignacions->id)}}"  class="text-danger">{{$Asignacions->nombre}}</a>
                                      </div>
                                      <div class="panel-body">
                                          {{$Asignacions->descripcion}}
                                      </div>
                                      <div class="panel-footer">
                                          <a href="{{route('Asignacion.edit',$Asignacions->id)}}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                          <a href="{{route('Asignacion.destroy',$Asignacions->id)}}" onclick="return confirm('¿Seguro que seas eliminar?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                            </tr>

                        <?php endif ?>

                      @endforeach
                    </tbody>
                </table>

              </div>

            </div>
</div></div>


@endsection