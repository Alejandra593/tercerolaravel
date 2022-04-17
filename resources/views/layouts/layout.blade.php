<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="indigo darken-4">
        <ul class="nav-wrapper">
            <li><a href="{{ route('departamentos.index')}}">Lista Departamentos</a></li>
            <li><a href="{{ route('departamentos.create')}}">Registro Departamentos</a></li>
            <li><a href="{{ route('municipios.index')}}">Lista Municipios</a></li>
            <li><a href="{{ route('municipios.create')}}">Registro Municipios</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>