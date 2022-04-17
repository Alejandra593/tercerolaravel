@extends('layouts.layout')
@section('content')
    <div class="row">
    <H1>Hola desde create</H1>
    <div class="divider"></div>
    <div class="row">
        <form action="{{ route('municipios.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" id="nombre" required name="nombre">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" id="codigo" required name="codigo">
                    <label for="codigo">Codigo</label>
                </div>
            </div>
            <div class="row">      
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" id="borrado" required name="borrado">
                    <label for="borrado">Borrado</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" id="id_departamento" required name="id_departamento">
                    <label for="id_departamento">id_departamento</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn indigo darken-4" value="Guardar">
                <input type="reset" class="btn yellow darken-4" value="Limpiar">
            </div>
        </form>
    </div>
</div>
@endsection