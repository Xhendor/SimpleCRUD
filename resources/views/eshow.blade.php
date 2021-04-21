@extends('layouts.app')

@section('texto')
    Detalle empleado
@endsection

@section('content')



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombres:</strong>
            {{ $dato->nombres }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellidos:</strong>
            {{ $dato->apellidos }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Edad:</strong>
            {{ $dato->edad }}
        </div>
    </div>
</div>
@endsection
