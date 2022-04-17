@extends('layouts.layout')
@section('content')
        <h1>HOLA DESDE CREATE</h1>
    <div class="divider"></div>
    <div class="row">
        <form action="{{route('departamentos.store')}}" method="post">
        @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="nombre" required name="nombre">
                    <label for="nombre">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="codigo" required name="codigo">
                    <label for="codigo">Codigo</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn indigo darken-4" value="Guardar">
                <input type="reset" class="btn yellow darken-4" value="Limpiar">
            </div>
        </form>
    </div>
@endsection