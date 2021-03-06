@extends('plantilla')
@section('titulo','Task - Grimaldi')
@section('contenido')
	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Lista de Tareas</strong>
                        <a href="{{ route('task.create') }}" class="btn btn-sm btn-success pull-right">Ingresar</a>
                    </div> 
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-dark">
                                <th scope="col">Nombre Tarea</th>
                                <th scope="col">Bloque de Trabajo</th>
                                <th scope="col">Estado</th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                                <th scope="col">  </th>
                            </thead>
                            <tbody>
                                @foreach($listar as $item)
                                    <tr>
                                        <td>{{ $item->nombre_tarea}}</td>
                                        <td>{{ $item->bloque_trabajo}}</td>
                                        <td>{{ $item->estado}}</td>
                                        <td><a href="{{ route('task.show', $item->id) }}" class="btn btn-sm btn-secondary">Ver</a></td>
                                        <td><a href="{{ route('task.edit', $item->id) }}" class="btn btn-sm btn-primary">Editar</a></td>
                                        <td>
                                            <form action = "" method = "POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class = "btn btn-sm btn-danger" type = "submit">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection