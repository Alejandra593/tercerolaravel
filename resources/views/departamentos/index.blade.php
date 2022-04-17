@extends('layouts.layout')
@section('content')
    <div class="row">
        <h1>Listado de Departamentos</h1>
        <div class="divider"></div>
        <table class="table stripped">
            <thead>
                <th>Id</th>
                <th>Departamentos</th>
                <th>codigo</th>
                <th>Accion</th>
            </thead>
            <tbody>
                @foreach ($departamento as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->codigo}}</td>
                        <td>
                             <a href="{{route('departamentos.edit', $item->id)}}" class="btn green darken-2">Editar</a>
                             <form action="{{route('departamentos.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn red darken-4" type="submit">Borrar</button>
                              </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection