@extends('plantilla')
@section('titulo','Task - Grimaldi')
@section('contenido')
	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Detalle de Tarea:</strong>                     
                    </div> 
                    <div class="card-body">
                        <p><strong>Id:</strong> {{ $datos->id }} </p>
                        <p><strong>Nombre de la Tarea:</strong> {{ $datos->nombre_tarea }} </p>
                        <p><strong>Bloque de Trabajo:</strong> {{ $datos->bloque_trabajo }} </p>
                        <p><strong>Estado:</strong> {{ $datos->estado }} </p>
                        <p><strong>Descripcion:</strong>  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection