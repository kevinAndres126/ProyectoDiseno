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
                    <h3 class="panel-title">Nuevo Grupo</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create">Agregar</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">

                <div class="form-group">
              {!!Form::label('Nombre','Nombre')!!}
              {!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'','required'])!!}
            </div>              
               <div class="form-group">
              {!!Form::label('Profesor ID:','Profesor ID:')!!}
              {!!Form::text('Profesor ID:',null,['class'=>'form-control','placeholder'=>'','required'])!!}
            </div>         
                <div class="form-group">
              {!!Form::label('Descripcion','Descripcion')!!}
              {!!Form::text('Descripcion',null,['class'=>'form-control','placeholder'=>'','required'])!!}
            </div>
              </div>

            </div>

</div></div></div>

@endsection