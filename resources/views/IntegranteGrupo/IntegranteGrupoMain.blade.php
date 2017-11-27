@extends('home')

@section('subcontent')
<div class="container">
    <div class="row">
    @foreach($integrante as $integrantes)

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">{{$integrantes->name }}</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Nombre:</p>
                            <p><strong>{{$integrantes->name }}</strong></p>
                            <hr>
                            <p>Email:</p>
                            <p><strong>{{$integrantes->email }}</strong></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{$integrantes->avatar }}" alt="{{ $integrantes->name }}" class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
 </div></div>
@endsection