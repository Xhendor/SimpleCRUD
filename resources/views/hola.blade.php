@extends('layouts.app')

@section('content')
    <style>
        .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>

    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
    </div>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
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
