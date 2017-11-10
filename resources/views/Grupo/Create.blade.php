@extends('layouts.app')


@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Grupo</div>
                <div class="panel-body">
                  
        {!!Form::open(['route'=>'Grupo.store','method'=>'POST']) !!}

            <div class="form-group">
              {!!Form::label('Nombre','Nombre')!!}
              {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
            </div>

            <div class="form-group">
              {!!Form::label('Descripcion','Descripcion')!!}
              {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
            </div>


            <div class="form-group">
              {!!Form::label('id_persona','id_persona')!!}
              {!!Form::text('id_persona',null,['class'=>'form-control','placeholder'=>'id_persona','required'])!!}
            </div>

            <div class="form-group">
              {!!Form::submit('AgregarGrupo',['class'=>'btn btn-primary'])!!}
            </div>

        {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
  


@endsection