@extends('home')


@section('subcontent')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
    <div class="row">

       

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

                  {!!Form::open(['route'=>'Grupo.index','method'=>'GET', 'class'=>'navbar-form pull-center']) !!}
                    <div class="input-group">
                       {!!Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Buscar','aria-describedby'=> 'search']) !!}

                       <span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>
                    </div>
                  {!!Form::close() !!}

                </div>

              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
           
                  
                  <tbody>
                    @foreach($Grupo as $Grupos)
                          <tr>
           
                              <div class="col-lg-4" >
                                  <div class="panel-primary class" >
                                      <div class="panel-heading">
                                        
                                        <a href="{{route('Grupo.show',$Grupos->id)}}" class="text-danger">{{$Grupos->nombre}}</a>
                                          
                                      </div>
                                      <div class="panel-body">
                                          {{$Grupos->descripcion}}
                                      </div>
                                      <div class="panel-footer">
                                          <a href="{{route('Grupo.edit',$Grupos->id)}}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                          <a href="{{route('Grupo.destroy',$Grupos->id)}}" onclick="return confirm('¿Seguro que seas eliminar?')" class="btn btn-danger"><em class="fa fa-trash"></em></a>

                                          <a href="{{route('Grupo.show',$Grupos->id)}}">
                                            
                                          </a>
                                      </div>
                                  </div>
                              </div>
       
<!--
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

-->

                          </tr>
                    @endforeach
                    </tbody>
                </table>

              </div>

            </div>

</div></div>

@endsection