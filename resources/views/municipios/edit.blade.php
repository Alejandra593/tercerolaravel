@extends('layouts.layout')
@section('contend')
        <h1>EDITANDO MUNICIPIO</h1>
    <div class="divider">
    <div class="row">
        <form action="{{ route('municipios.update', $municipios->id)}}" method="post">
            @csrf
            @method('PATCH')
             <div class="row">
                 <div class="input-field col s6">
                    <input type="text" id="nombre" required name="nombre">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" id="codigo" required name="codigo">
                    <label for="codigo">Codigo</label>
                </div>
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
                <input type="submit" class="btn green darken-4" value="Guardar">
                <a href="{{ route('municipios.index')}}" class="btn yellow darken-2">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
