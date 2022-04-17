@extends('layouts.layout')
@section('content')
<div class="row">
   <h1>Listado de Municipios</h1>
   <div class="divider"></div>
   <table class="table stripped">
       <thead>
           <th>Id</th>
           <th>nombre</th>
           <th>codigo</th>
           <th>borrado</th>
           <th>id_departamento</th>
       </thead>
       <tbody>
        @foreach ($municipios as $item)
         <tr>
             <td>{{ $item->id }}</td>
             <td>{{ $item->nombre }}</td>
             <td>{{ $item->codigo }}</td>
             <td>{{ $item->borrado }}</td>
             <td>{{ $item->id_departamento}}</td>
             <td>
                 <a href="{{ route('municipios.edit', $item->id)}}" class="btn green darken-2">Editar</a>
                 <form action="{{ route('municipios.destroy', $item->id)}}" method="post">
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