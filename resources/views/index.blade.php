@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de Tareas</h2>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
        </div>
    </div>

    {{-- Se agrega mensaje para la creación --}}
    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong><br>
        </div>
    @endif

    {{-- Se agrega mensaje para la modificación --}}
    @if (Session::get('updated'))
        <div class="alert alert-warning mt-2">
            <strong>{{Session::get('updated')}}</strong><br>
        </div>
    @endif

    {{-- Se agrega mensaje para la eliminación --}}
    @if (Session::get('deleted'))
        <div class="alert alert-danger mt-2">
            <strong>{{Session::get('deleted')}}</strong><br>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="{{route('tasks.destroy', $task)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </table>
        {{$tasks->links()}}  {{-- Esto se usa para hacer suo del paginador --}}
    </div>
</div>
@endsection