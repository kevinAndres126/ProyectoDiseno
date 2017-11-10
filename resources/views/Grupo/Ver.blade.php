@extends('layouts.app')


@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ver Grupo</div>
                <div class="panel-body">
                	
				{!!Form::open(['route'=>['Grupo.show',$Grupo->id],'method'=>'PUT']) !!}

						<div class="form-group">
							{!!Form::label('Nombre','Nombre')!!}
							{!!Form::text('nombre',$Grupo->nombre,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('Descripcion','Descripcion')!!}
							{!!Form::text('descripcion',$Grupo->descripcion,['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
						</div>


						<div class="form-group">
							{!!Form::label('id_persona','id_persona')!!}
							{!!Form::text('id_persona',$Grupo->id_persona,['class'=>'form-control','placeholder'=>'id_persona','required'])!!}
						</div>


						<div class="form-group">
							{!!Form::close('GuardarAsignacion',['class'=>'btn btn-primary'])!!}
						</div>
						<a href="{{route('Grupo.index')}}" class="btn btn-primary">
                    	backk</a><br>

					{!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
	


@endsection