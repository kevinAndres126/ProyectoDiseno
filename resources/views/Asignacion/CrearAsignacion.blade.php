@extends('layouts.app')


@section('content')

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Asignacion</div>
                <div class="panel-body">
                	
				{!!Form::open(['route'=>'Asignacion.store','method'=>'POST']) !!}

						<div class="form-group">
							{!!Form::label('Nombre','Nombre')!!}
							{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('Descripcion','Descripcion')!!}
							{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::label('tipo','tipo')!!}
							{!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>'tipo','required'])!!}
						</div>
						<div class="form-group">
							{!!Form::label('fechaCreacion','fechaCreacion')!!}
							{!!Form::text('fechaCreacion',null,['class'=>'form-control','placeholder'=>'fechaCreacion','required'])!!}
						</div>
						<div class="form-group">
							{!!Form::label('fechaEntrega','fechaEntrega')!!}
							{!!Form::text('fechaEntrega',null,['class'=>'form-control','placeholder'=>'fechaEntrega','required'])!!}
						</div>
						<div class="form-group">
							{!!Form::label('valor','valor')!!}
							{!!Form::text('valor',null,['class'=>'form-control','placeholder'=>'valor','required'])!!}
						</div>
						<div class="form-group">
							{!!Form::label('calificacion','calificacion')!!}
							{!!Form::text('calificacion',null,['class'=>'form-control','placeholder'=>'calificacion','required'])!!}
						</div>
						<div class="form-group">
							{!!Form::label('id_grupo','id_grupo')!!}
							{!!Form::text('id_grupo',null,['class'=>'form-control','placeholder'=>'id_grupo','required'])!!}
						</div>

						<div class="form-group">
							{!!Form::submit('AgregarAsignacion',['class'=>'btn btn-primary'])!!}
						</div>

					{!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
	


@endsection