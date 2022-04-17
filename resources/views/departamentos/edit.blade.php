@extends('layouts.layout')
@section('content')
        <h1>EDITANDO DEPARTAMENTO</h1>
    <div class="divider"></div>
    <div class="row">
        <form action="{{ route ('departamentos.update', $departamento->id) }}" method="post">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="nombre" required name="nombre" value="{{$departamento->nombre}}">
                    <label for="nombre">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="codigo" required name="codigo" value="{{$departamento->codigo}}">
                    <label for="codigo">Codigo</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn indigo darken-4" value="Guardar">
                <a href="{{ route('departamentos.index')}}" class="btn yellow darken-2">Cancelar</a>
            </div>
        </form>
    </div>
@endsection