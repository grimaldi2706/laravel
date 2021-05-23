@extends('plantilla')
@section('titulo','Crear Task - Grimaldi')
@section('contenido')
	
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Registro de Tarea</strong>    
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                        @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="txtid">Nombre de la Tarea:</label>
                                <input type="text" class="form-control" id="nombre_tarea" name="nombre_tarea" placeholder="Reporte clientes" value="">
                            </div>
                            <div class="form-group">
                                <label for="txtnombre">Bloque de Trabajo:</label>
                                <input type="text" class="form-control" id="bloque_trabajo" name="bloque_trabajo" placeholder="Primera Hora " value="">
                            </div>
                            <div class="form-group">
                                <label for="txtdireccion">Estado:</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Terminada" value="">
                            </div>                                                                                                                                                                        
                            <button class="btn btn-sm btn-info" type="submit">Registrar</button>
                        </form>                                    
                    </div>                    
                </div>
                
        </div>                                 
    </div>   

@endsection