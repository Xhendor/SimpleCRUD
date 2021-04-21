@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD- Clase APPSWBD 2021</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('hola.create') }}"> Create New Empleado</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->nombres}}</td>
            <td>{{ $value->apellidos}}</td>
            <td>{{ $value->edad}}</td>
            <td>

                <form action="{{ route('hola.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('hola.show',$value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('hola.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
{{--    {!! $data->links() !!}--}}

@endsection
